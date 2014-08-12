#!/bin/bash -ex

vagrant --version

mkdir -p build/logs
if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --without development
  bundle ex berks update -e development
fi

vagrant plugin install vagrant-berkshelf --plugin-version '2.0.1'
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
vagrant destroy --force
