#!/bin/bash -ex

php vendors/bin/coveralls --root-dir . -vvv || exit $?
