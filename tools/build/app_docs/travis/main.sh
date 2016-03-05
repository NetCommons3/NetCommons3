#!/bin/bash -ex

APP=`basename $CLASS_DOC_SOURCE_URI | perl -pi -e 's/([^\/]+)\.git$/$1/'`
CLASS_DOC_SOURCE_ROOT=$WORKSPACE/$APP
APP_ROOT=$CLASS_DOC_SOURCE_ROOT/app
LOG=/var/log/phpdoc.log
export PATH=$PATH:./vendors/bin

sudo touch $LOG
sudo chmod a+w $LOG

# Clear previous build
rm -rf $APP
cat /dev/null > $LOG

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


# Init phpdoc options
for p in `cat app/Config/vendors.txt`
do
  IGNORE_PLUGINS="$IGNORE_PLUGINS,*/app/Plugin/$p/*"
done
IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

# Exit on parse error
phpdoc parse -d $APP_ROOT -t $WORKSPACE/phpdoc -i $IGNORE_PLUGINS,*/Config/* --force --ansi | tee $LOG
[ `grep -c '\[37;41m' $LOG` -ne 0 ] && cat $LOG && exit 1

# Generate class docs
phpdoc -d $APP_ROOT -t $WORKSPACE/phpdoc -i $IGNORE_PLUGINS,*/Config/*
