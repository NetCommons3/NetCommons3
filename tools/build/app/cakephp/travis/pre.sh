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
cp app/Config/database.php.travis app/Config/database.php
sudo wget https://raw.githubusercontent.com/topaz2/chef_boilerplate_php/master/files/default/build/cakephp/phpmd.xml -O /etc/phpmd.xml

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
