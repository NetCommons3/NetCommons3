#!/bin/bash -ex

export PATH=$PATH:./vendors/bin:$NETCOMMONS_BUILD_DIR/vendors/bin

cd $NETCOMMONS_BUILD_DIR

# php
app/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --configuration phpunit.xml.dist --coverage-clover --stderr || exit $?
phpcs -p --extensions=php,ctp --standard=./vendors/cakephp/cakephp-codesniffer/CakePHP,tools/build/app/phpcs/NetCommons --ignore=app/Config/Migration/,app/Config/database.php,app/Plugin/$PLUGIN_NAME/Config/Migration,app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS app/Plugin/$PLUGIN_NAME || exit $?
phpmd app/Plugin/$PLUGIN_NAME text tools/phpmd/rules.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app/Plugin/$PLUGIN_NAME

# js
gjslint --strict --max_line_length 100 -x jquery.js,jquery.cookie.js,js_debug_toolbar.js,travis.karma.conf.js,my.karma.conf.js -e jasmine_examples,HtmlPurifier,webroot/components,webroot/js/langs -r app/Plugin/$PLUGIN_NAME || exit $?
if [ -d ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
  ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
fi

#Todo: 下記エラーが発生するためphp7.2では、phpdocのテストは行わない
#@see https://travis-ci.org/NetCommons3/Announcements/jobs/568424552#L902-L904

PHP_VERSION="`php --version`"
check72=`echo $PHP_VERSION | grep "^PHP 7.2"`

if [ "$check72" = "" ]; then
	# phpdoc
	LOG=./app/tmp/logs/phpdoc.log
	touch $LOG
	chmod a+w $LOG

	echo "phpdoc app/Plugin/$PLUGIN_NAME"
	phpdoc parse -d app/Plugin/$PLUGIN_NAME -t $TRAVIS_BUILD_DIR/phpdoc --force --ansi | tee $LOG
	[ `grep -c '\[37;41m' $LOG` -ne 0 ] && cat $LOG && exit 1
	echo "phpdoc no error."
fi
