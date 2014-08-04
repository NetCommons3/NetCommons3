#!/bin/bash -ex

bundle
if [ "$UPGRADE_DEPENDENCIES" = "true" ]
then
  bundle update
  bundle ex berks update
  exit 0
fi
