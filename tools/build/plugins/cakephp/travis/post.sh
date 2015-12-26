#!/bin/bash -ex

php vendors/bin/coveralls -vvv -r . || exit $?
