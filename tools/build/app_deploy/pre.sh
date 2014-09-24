#!/bin/bash -ex

if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --full-index --jobs=`ohai cpu/total` --without development
  bundle ex berks install -e development
fi
