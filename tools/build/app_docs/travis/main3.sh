#!/bin/bash -ex

APP=`basename $CLASS_DOC_SOURCE_URI | perl -pi -e 's/([^\/]+)\.git$/$1/'`
CLASS_DOC_SOURCE_ROOT=$WORKSPACE/$APP
APP_ROOT=$CLASS_DOC_SOURCE_ROOT/app
LOG=/var/log/phpdoc.log
export PATH=$PATH:./vendors/bin

cd $CLASS_DOC_SOURCE_ROOT

[ `grep -c '\[37;41m' $LOG` -ne 0 ] && cat $LOG && exit 1

# Init phpdoc options
for p in `cat app/Config/vendors.txt`
do
  IGNORE_PLUGINS="$IGNORE_PLUGINS,*/app/Plugin/$p/*"
done
IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

# Generate class docs
phpdoc -d $APP_ROOT -t $WORKSPACE/phpdoc -i $IGNORE_PLUGINS,*/Config/*
