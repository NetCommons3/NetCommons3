#!/bin/bash -ex

vagrant --version

mkdir -p build/logs
# vagrant plugin install vagrant-berkshelf
vagrant plugin uninstall vagrant-berkshelf
vagrant plugin install vagrant-berkshelf --plugin-version=1.3.7
# vagrant plugin install vagrant-vbguest
# vagrant plugin uninstall vagrant-vbguest
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
vagrant plugin list
vagrant halt
vagrant up
vagrant destroy --force
