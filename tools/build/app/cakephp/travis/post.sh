#!/bin/bash -ex

php vendors/bin/php-coveralls -vvv || exit $?
