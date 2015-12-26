#!/bin/bash -ex

php vendors/bin/coveralls --root_dir . -vvv || exit $?
