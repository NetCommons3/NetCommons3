#!/bin/bash -ex

if [ -w "Berksfile.lock" -a "$UPGRADE_DEPENDENCIES" = "true" ]
then
  bundle update
  berks update
else
  bundle install --full-index --jobs=`ohai cpu/total` --without development
  berks install -e development
fi

if [ "$DB" = 'mysql' ]; then mysql -utest -ptest -e 'DROP DATABASE IF EXISTS test_nc3; CREATE DATABASE test_nc3;'; fi
if [ "$DB" = 'postgresql' ]; then
  psql -c 'DROP DATABASE IF EXISTS test_nc3;' -U postgres
  psql -c 'CREATE DATABASE test_nc3;' -U postgres
fi
if [ "$DB" = 'postgresql' ]; then psql -c 'CREATE SCHEMA test2;' -U postgres -d test_nc3; fi
if [ "$DB" = 'postgresql' ]; then psql -c 'CREATE SCHEMA test3;' -U postgres -d test_nc3; fi

sudo rm -rf plugins/*
sudo rm -rf vendors/*
chmod -R 777 app/tmp
mkdir -p build/logs

sudo composer self-update
composer update --ignore-platform-reqs

cp app/Config/database.php.$DB app/Config/database.php

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS=$IGNORE_PLUGINS,$WORKSPACE/app/Plugin/$p
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
