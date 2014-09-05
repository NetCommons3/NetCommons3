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
for env in development staging production
do
  sudo mkdir -p $DIR/$env
done
