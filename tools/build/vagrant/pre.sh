#!/bin/bash -ex

vagrant --version

mkdir -p build/logs
bundle
if [ "$UPGRADE_DEPENDENCIES" = "true" ]
then
  bundle update
  bundle ex berks update
  exit 0
fi

vagrant plugin install vagrant-berkshelf --plugin-version '>= 2.0.1'
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
vagrant destroy --force
