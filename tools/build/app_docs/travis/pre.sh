#!/bin/bash -ex

sudo apt-get install graphviz
sudo pip install sphinx
mkdir -p build/logs
composer global require phpdocumentor/phpdocumentor:2.*
phpenv rehash
set +H

WORKSPACE=$TRAVIS_BUILD_DIR
