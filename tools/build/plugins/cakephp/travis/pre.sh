#!/bin/bash -ex

if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi
if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi

export NETCOMMONS_BUILD_DIR=`dirname $TRAVIS_BUILD_DIR`/NetCommons3
export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

cp $TRAVIS_BUILD_DIR/composer.json .
rm composer.lock
cp -r ../$PLUGIN_NAME plugins
cat composer.json
composer install
chmod -R 777 app/tmp
mkdir -p build/logs

pear config-set auto_discover 1
pear channel-discover pear.phpunit.de
pear channel-discover pear.cakephp.org
pear channel-discover pear.phpmd.org
pear channel-discover pear.pdepend.org
pear install --alldeps phpunit/PHPUnit-3.7.32
pear install --alldeps cakephp/CakePHP_CodeSniffer
pear install --alldeps phpmd/PHP_PMD
pear install --alldeps phpunit/phpcpd

phpenv rehash
set +H
cp app/Config/database.php.test app/Config/database.php

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS=$IGNORE_PLUGINS,$TRAVIS_BUILD_DIR/app/Plugin/$p
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
