#!/bin/bash -ex

# php
./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr || exit $?

export PATH=$PATH:./vendors/bin
phpcs -p --extensions=php --standard=./vendors/cakephp/cakephp-codesniffer/CakePHP --ignore=app/Config/Migration/,app/Config/database.php,app/Plugin/$PLUGIN_NAME/Config/Migration,app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS app/Plugin/$PLUGIN_NAME || exit $?
phpmd app/Plugin/$PLUGIN_NAME text /etc/phpmd/rules.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app/Plugin/$PLUGIN_NAME

# js
gjslint --strict -x jquery.js,jquery.cookie.js,js_debug_toolbar.js,travis.karma.conf.js,my.karma.conf.js -e jasmine_examples,HtmlPurifier -r app || exit $?
if [ -d ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
  ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
fi
