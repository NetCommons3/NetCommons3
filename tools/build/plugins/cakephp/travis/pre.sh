#!/bin/bash -ex

if [ $DB = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi
if [ $DB = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

composer update

rm composer.json
wget https://raw.githubusercontent.com/NetCommons3/NetCommons/master/composer.json

php -q << _EOF_ > packages.txt
<?php
\$currentComposer = json_decode(file_get_contents(getenv('TRAVIS_BUILD_DIR') . '/composer.json'), true);
\$composer = json_decode(file_get_contents('composer.json'), true);
\$ret = '';
foreach (\$composer['require-dev'] as \$namespace => \$version) {
	if (\$currentComposer['name'] !== \$namespace) {
		\$ret .= ' ' . \$namespace . ':' . \$version;
	}
}
echo \$ret;
_EOF_
CMPOSER_REQURES=`cat packages.txt | cut -c 2-`
echo $CMPOSER_REQURES

cp $TRAVIS_BUILD_DIR/composer.json .
rm composer.lock
cp -r ../$PLUGIN_NAME app/Plugin
if [ "$PLUGIN_NAME" = "NetCommons" ] ; then
	composer require --dev $CMPOSER_REQURES
else
	composer require --dev netcommons/net-commons:@dev $CMPOSER_REQURES
fi
#composer install
chmod -R 777 app/tmp
mkdir -p build/logs
mkdir -p build/cov
sudo mkdir -p /etc/phpmd

#composer require sebastian/phpcpd:* cakephp/cakephp-codesniffer:~1.0 phpmd/phpmd:@stable phpunit/phpunit:~3.7.38 satooshi/php-coveralls:@dev
sudo pip install http://closure-linter.googlecode.com/files/closure_linter-latest.tar.gz

phpenv rehash
set +H
if [ "$PLUGIN_NAME" != "Install" ]; then
  cp app/Config/database.php.travis app/Config/database.php
fi
if [ -f "app/Plugin/$PLUGIN_NAME/phpunit.xml.dist" ]; then
  cp app/Plugin/$PLUGIN_NAME/phpunit.xml.dist .
else
  cp tools/build/app/cakephp/phpunit.xml.dist .
fi
sudo wget https://raw.githubusercontent.com/topaz2/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O /etc/phpmd/rules.xml

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$NETCOMMONS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

echo "Configure::write('Security.salt', 'ForTravis');" >> ./app/Config/core.php
echo "Configure::write('Security.cipherSeed', '999');" >> ./app/Config/core.php

sudo add-apt-repository -y universe
sudo add-apt-repository "deb http://security.ubuntu.com/ubuntu $(lsb_release --short --codename)-security main restricted"
sudo add-apt-repository -y ppa:groonga/ppa
sudo apt-get update
sudo apt-get install nodejs npm software-properties-common lsb-release mysql-server-mroonga groonga-tokenizer-mecab
npm install -g bower
bower install
bower install `cat app/Plugin/$PLUGIN_NAME/bower.json | jq -c '.dependencies' | sed "s/[{\"\'}]//g" | sed "s/,/ /g" | sed "s/:/#/g"` --save
npm install jasmine-node karma karma-coverage karma-jasmine karma-firefox-launcher karma-phantomjs-launcher
