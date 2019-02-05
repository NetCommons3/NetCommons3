#!/bin/bash -ex

echo $DB

if [ $DB = 'mysql' -o $DB = 'mariadb' -o $DB = 'mariadb-10.0' ]; then 
	mysql -e 'DROP DATABASE IF EXISTS cakephp_test;'
	mysql -e 'CREATE DATABASE cakephp_test;'
	mysql --version
fi
if [ $DB = 'pgsql' ]; then psql -c 'DROP DATABASE cakephp_test; CREATE DATABASE cakephp_test;' -U postgres; fi

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

composer self-update
composer global require hirak/prestissimo

# NetCommons3 project install
cd $NETCOMMONS_BUILD_DIR
rm composer.lock
composer clear-cache
composer remove --no-update netcommons/install
composer config minimum-stability dev
composer config repositories.0 git https://github.com/NetCommons3/migrations.git

# Plugin install
php -q << _EOF_ > packages.txt
<?php
\$composer = json_decode(file_get_contents(getenv('TRAVIS_BUILD_DIR') . '/composer.json'), true);
\$ret = '';
if (isset(\$composer['require'])) {
	foreach (\$composer['require'] as \$package => \$version) {
		\$ret .= ' ' . \$package . ':' . \$version;
	}
}
echo \$ret;
_EOF_
CMPOSER_REQURE=`cat packages.txt | cut -c 2-`
if [ ! "$CMPOSER_REQURE" = "" ] ; then
	echo $CMPOSER_REQURE
	composer require --no-update $CMPOSER_REQURE
fi


php -q << _EOF_ > packages.txt
<?php
\$composer = json_decode(file_get_contents(getenv('TRAVIS_BUILD_DIR') . '/composer.json'), true);
\$ret = '';
if (isset(\$composer['require-dev'])) {
	foreach (\$composer['require-dev'] as \$package => \$version) {
		\$ret .= ' ' . \$package . ':' . \$version;
	}
}
echo \$ret;
_EOF_
CMPOSER_REQURE_DEV=`cat packages.txt | cut -c 2-`
if [ ! "$CMPOSER_REQURE_DEV" = "" ] ; then
	echo $CMPOSER_REQURE_DEV
	composer require --dev --no-update $CMPOSER_REQURE_DEV
fi
composer install --no-scripts

#cd $TRAVIS_BUILD_DIR
#mkdir ../build
#cd ../build
#cp $TRAVIS_BUILD_DIR/composer.json ./
#composer config minimum-stability dev
#composer config prefer-stable true
#composer update
#ls -l
#cp -rpf ./app/* $NETCOMMONS_BUILD_DIR/app/

if [ -d $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME ] ; then
  rm -rf $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME
fi
cp -rf $TRAVIS_BUILD_DIR $NETCOMMONS_BUILD_DIR/app/Plugin/

# Other setup
cd $NETCOMMONS_BUILD_DIR
chmod -R 777 app/tmp
mkdir -p build/logs
mkdir -p build/cov
mkdir -p tools/phpmd

#sudo pip install http://closure-linter.googlecode.com/files/closure_linter-latest.tar.gz
#pip install --upgrade pip
pip install --user six
pip install --user https://github.com/google/closure-linter/archive/v2.3.19.tar.gz

phpenv rehash
set +H
#if [ "$PLUGIN_NAME" != "Install" ]; then
  cp app/Config/database.php.travis app/Config/database.php
#else
#  cp -f app/Config/database.php.travis app/Config/database.php.install
#fi
if [ -f "app/Plugin/$PLUGIN_NAME/phpunit.xml.dist" ]; then
  cp app/Plugin/$PLUGIN_NAME/phpunit.xml.dist .
else
  cp tools/build/app/cakephp/phpunit.xml.dist .
fi
wget https://raw.githubusercontent.com/NetCommons3/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O tools/phpmd/rules.xml

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$NETCOMMONS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

echo "Configure::write('Security.salt', 'ForTravis');" >> ./app/Config/core.php
echo "Configure::write('Security.cipherSeed', '999');" >> ./app/Config/core.php

#sudo add-apt-repository -y universe
#sudo add-apt-repository "deb http://security.ubuntu.com/ubuntu $(lsb_release --short --codename)-security main restricted"
#sudo add-apt-repository -y ppa:groonga/ppa
#sudo apt-get update
#sudo apt-get install nodejs npm software-properties-common lsb-release mysql-server-mroonga groonga-tokenizer-mecab
if [ -d app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
	npm install -g bower
	bower install
	bower install `cat app/Plugin/$PLUGIN_NAME/bower.json | jq -c '.dependencies' | sed "s/[{\"\'}]//g" | sed "s/,/ /g" | sed "s/:/#/g"` --save
	npm install jasmine-node karma karma-coverage karma-jasmine karma-firefox-launcher karma-phantomjs-launcher
fi
