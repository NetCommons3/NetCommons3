#!/bin/bash -ex

phpenv rehash
set +H

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

#export GIT_COMMITTER_NAME=s-nakajima
#export GIT_COMMITTER_EMAIL=nakajimashouhei@gmail.com
#export GIT_AUTHOR_NAME=s-nakajima
#export GIT_AUTHOR_EMAIL=nakajimashouhei@gmail.com

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$NETCOMMONS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

export PATH=$PATH:./vendors/bin:./vendor/bin
