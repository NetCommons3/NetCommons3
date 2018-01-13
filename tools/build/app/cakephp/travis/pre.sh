#!/bin/bash -ex

# Fixing composer error
# @link https://travis-ci.org/NetCommons3/NetCommons3/jobs/309361898#L466-L504
# @link https://travis-ci.org/NetCommons3/NetCommons3/jobs/309361900#L510-L518
PHP_VERSION="`php --version`"
check54=`echo $PHP_VERSION | grep "^PHP 5.4"`
check55=`echo $PHP_VERSION | grep "^PHP 5.5"`
check56=`echo $PHP_VERSION | grep "^PHP 5.6"`
echo "$check54 && $check55"
echo "$check56"
if [ ! "$check54" = "" -o  ! "$check55" = "" ]; then
	echo "$check54 && $check55"
	composer require --dev --no-update phpunit/phpunit:~4.7.0@stable
elif [ ! "$check56" = "" ]; then
	echo "$check56"
	composer require --dev --no-update phpunit/phpunit:~5.6.0@stable
fi

rm composer.lock
composer install

sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi"
sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test2;'; fi"
sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test3;'; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE SCHEMA test2;' -U postgres -d cakephp_test; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE SCHEMA test3;' -U postgres -d cakephp_test; fi"

chmod -R 777 ./app/tmp
mkdir -p build/logs
mkdir -p tools/phpmd

#sudo pip install http://closure-linter.googlecode.com/files/closure_linter-latest.tar.gz
pip install --user six
pip install --user https://github.com/google/closure-linter/archive/v2.3.19.tar.gz

phpenv rehash
set +H
cp app/Config/database.php.travis app/Config/database.php
wget https://raw.githubusercontent.com/NetCommons3/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O tools/phpmd/rules.xml

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$TRAVIS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
for d in `find app/Plugin/*/Config/Migration app/Plugin/*/Config/Schema -type d`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$TRAVIS_BUILD_DIR/$d"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude $d"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`
