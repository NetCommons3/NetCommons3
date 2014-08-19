#!/bin/bash -ex

bundle ex kitchen test -c `ohai cpu/total`
