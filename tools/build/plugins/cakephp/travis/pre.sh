#!/bin/bash -ex

env
if [ $DB = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi
if [ $DB = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

cp $TRAVIS_BUILD_DIR/composer.json .
rm composer.lock
cp -r ../$PLUGIN_NAME app/Plugin
composer require netcommons/net-commons:"@dev"
composer install
chmod -R 777 app/tmp
mkdir -p build/logs
mkdir -p build/cov

pear config-set auto_discover 1
pear channel-discover pear.phpunit.de
pear channel-discover pear.cakephp.org
pear channel-discover pear.phpmd.org
pear channel-discover pear.pdepend.org
pear install --alldeps phpunit/PHPUnit-3.7.32
pear install --alldeps cakephp/CakePHP_CodeSniffer
pear install phpmd/PHP_PMD
pear install phpunit/phpcpd
sudo pip install http://closure-linter.googlecode.com/files/closure_linter-latest.tar.gz

phpenv rehash
set +H
if [ "$PLUGIN_NAME" != "Install" ]; then
  cp app/Config/database.php.travis app/Config/database.php
fi
cp tools/build/app/cakephp/phpunit.xml.dist .
sudo wget https://raw.githubusercontent.com/topaz2/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O /etc/phpmd/rules.xml

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$NETCOMMONS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

echo "Configure::write('Security.salt', 'ForTravis');" >> ./app/Config/core.php
echo "Configure::write('Security.cipherSeed', '999');" >> ./app/Config/core.php

sudo apt-get install nodejs npm
npm install -g bower
bower install
npm install jasmine-node karma karma-coverage karma-jasmine karma-firefox-launcher karma-phantomjs-launcher
