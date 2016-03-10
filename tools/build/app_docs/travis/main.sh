#!/bin/bash -ex

APP=`basename $CLASS_DOC_SOURCE_URI | perl -pi -e 's/([^\/]+)\.git$/$1/'`
CLASS_DOC_SOURCE_ROOT=$WORKSPACE/$APP
APP_ROOT=$CLASS_DOC_SOURCE_ROOT/app
export PATH=$PATH:./vendors/bin

# Clear previous build
rm -rf $APP

# Generate sphinx docs
cd $WORKSPACE/sphinx
make html
[ $? -ne 0 ] && exit 1
cd -

# Install all plugins
git clone $CLASS_DOC_SOURCE_URI
cd $CLASS_DOC_SOURCE_ROOT
cp composer.json .
composer update --prefer-dist

plugins=""
dev="--dev "
for plugin in `cat ${APP_ROOT}/Plugin/Install/vendors.txt`
do
  plugins="${plugins} ${plugin}"
done
echo "composer require ${dev}${plugins}"
composer require ${dev}${plugins}
