#!/bin/bash -ex

if [ $DB = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi
if [ $DB = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

# NetCommons3 project install
rm composer.lock
composer config minimum-stability dev
composer config prefer-stable true
composer install

# Plugin install
cp $TRAVIS_BUILD_DIR/composer.json .
#rm composer.lock
#composer config minimum-stability dev
#composer config prefer-stable true
composer update
cp -r ../$PLUGIN_NAME app/Plugin

# Other setup
chmod -R 777 app/tmp
mkdir -p build/logs
mkdir -p build/cov
sudo mkdir -p /etc/phpmd

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
sudo wget https://raw.githubusercontent.com/NetCommons3/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O /etc/phpmd/rules.xml

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
