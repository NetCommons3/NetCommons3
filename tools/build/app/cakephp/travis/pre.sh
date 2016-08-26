#!/bin/bash -ex

composer install

sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test;'; fi"
sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test2;'; fi"
sh -c "if [ '$DB' = 'mysql' ]; then mysql -e 'CREATE DATABASE cakephp_test3;'; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE DATABASE cakephp_test;' -U postgres; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE SCHEMA test2;' -U postgres -d cakephp_test; fi"
sh -c "if [ '$DB' = 'pgsql' ]; then psql -c 'CREATE SCHEMA test3;' -U postgres -d cakephp_test; fi"

chmod -R 777 ./app/tmp
mkdir -p build/logs
sudo mkdir -p /etc/phpmd

#sudo pip install http://closure-linter.googlecode.com/files/closure_linter-latest.tar.gz
sudo pip install https://github.com/google/closure-linter/archive/v2.3.19.tar.gz

phpenv rehash
set +H
cp app/Config/database.php.travis app/Config/database.php
sudo wget https://raw.githubusercontent.com/NetCommons3/chef_boilerplate_php/master/files/default/build/cakephp/phpmd/rules.xml -O /etc/phpmd/rules.xml

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
