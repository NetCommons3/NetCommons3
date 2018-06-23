#!/bin/bash -ex

phpenv rehash
set +H

export PLUGIN_NAME=`basename $TRAVIS_BUILD_DIR`

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS="$IGNORE_PLUGINS,$NETCOMMONS_BUILD_DIR/app/Plugin/$p"
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done
export IGNORE_PLUGINS=`echo $IGNORE_PLUGINS | cut -c 2-`

export PATH=$PATH:./vendors/bin

phpenv config-add $NETCOMMONS_BUILD_DIR/tools/build/plugins/cakephp/travis/travis.php.ini
php -ini | grep memory_limit