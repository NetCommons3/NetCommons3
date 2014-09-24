#!/bin/bash -ex

vagrant --version

mkdir -p build/logs
if [ "$ENVIRONMENT" = "development" ]
then
  bundle update
  bundle ex berks update
else
  bundle install --full-index --jobs=`ohai cpu/total` --without development
  bundle ex berks install -e development
fi

vagrant plugin install vagrant-berkshelf --plugin-version '2.0.1'
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
vagrant destroy --force
