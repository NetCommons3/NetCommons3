#!/bin/bash -ex

#if [ -w "Berksfile.lock" -a "$UPGRADE_DEPENDENCIES" = "true" ]
#then
#  bundle update
#  berks update
#else
#  bundle install --full-index --jobs=`ohai cpu/total` --without development
#  berks install -e development
#fi

if [ "$DB" = 'mysql' ]; then 
		mysql -utest -ptest -e 'DROP DATABASE IF EXISTS test_nc3;
	CREATE DATABASE test_nc3;'; 
fi
if [ "$DB" = 'postgresql' ]; then
  psql -c 'DROP DATABASE IF EXISTS test_nc3;' -U postgres
  psql -c 'CREATE DATABASE test_nc3;' -U postgres
fi
if [ "$DB" = 'postgresql' ]; then psql -c 'CREATE SCHEMA test2;' -U postgres -d test_nc3; fi
if [ "$DB" = 'postgresql' ]; then psql -c 'CREATE SCHEMA test3;' -U postgres -d test_nc3; fi

rm -rf plugins/*
rm -rf vendors/*
chmod -R 777 app/tmp
mkdir -p build/logs
rm composer.lock

# Fixing composer error
# @link https://travis-ci.org/NetCommons3/NetCommons3/jobs/309361898#L466-L504
# @link https://travis-ci.org/NetCommons3/NetCommons3/jobs/309361900#L510-L518
composer remove --no-update minimum-stability
PHP_VERSION="`php --version`"
check54=`echo $PHP_VERSION | grep "^PHP 5.4"`
check55=`echo $PHP_VERSION | grep "^PHP 5.5"`
check56=`echo $PHP_VERSION | grep "^PHP 5.6"`
if [ ! "$check54" = "" -o  ! "$check55" = "" ]; then
	echo "$check54 && $check55"
	composer require --dev --no-update phpunit/phpunit:~4.7.0@stable
elif [ ! "$check56" = "" ]; then
	echo "$check56"
	composer require --dev --no-update phpunit/phpunit:~5.6.0@stable
fi

composer self-update
composer update

cp app/Config/database.php.$DB app/Config/database.php

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS=$IGNORE_PLUGINS,$WORKSPACE/app/Plugin/$p
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
