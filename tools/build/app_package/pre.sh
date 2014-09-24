#!/bin/bash -ex

if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --full-index --jobs=`ohai cpu/total` --without development
  bundle ex berks install -e development
fi

DIR=/var/local/backup/archives
for env in development staging production
do
  sudo mkdir -p $DIR/$env
done
sudo chmod 777 -R $DIR
