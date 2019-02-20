#!/bin/bash -ex

# coveralls
# @link https://github.com/NetCommons3/NetCommons3/blob/0d675cf01786a79ed9c3a5faeb198b808686e3f2/tools/build/app/cakephp/travis/pre.sh#L10
PHP_VERSION="`php --version`"
check54=`echo $PHP_VERSION | grep "^PHP 5.4"`
cd $NETCOMMONS_BUILD_DIR
if [ ! "$check54" = "" ]; then
	php vendors/bin/coveralls --root_dir . -vvv || exit $?
else
	php vendors/bin/php-coveralls --root_dir . -vvv || exit $?
fi
