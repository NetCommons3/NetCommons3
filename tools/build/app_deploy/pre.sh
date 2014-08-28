#!/bin/bash -ex

if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --without development
  bundle ex berks install -e development
fi
