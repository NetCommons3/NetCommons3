#!/bin/bash -ex

cp tools/build/app/cakephp/composer.json composer.json
hhvm `which composer` update --prefer-dist
tar cjf $DIR/$ENVIRONMENT/app-${BUILD_ID}.tar.bz .
cp $DIR/$ENVIRONMENT/app-${BUILD_ID}.tar.bz $DIR/$ENVIRONMENT/app-latest.tar.bz
