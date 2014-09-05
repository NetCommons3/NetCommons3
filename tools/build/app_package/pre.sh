#!/bin/bash -ex

if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --without development
  bundle ex berks update -e development
fi

export DIR=/var/local/backup/archives
sudo mkdir -p $DIR
