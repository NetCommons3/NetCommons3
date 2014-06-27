#!/bin/bash -ex

# ./lib/Cake/Console/cake Migrations.migration run all -p NetCommons
# ./lib/Cake/Console/cake Migrations.migration run all -p NetCommons -c test -i test
# ./lib/Cake/Console/cake Migrations.migration run all -p $PLUGIN_NAME
./lib/Cake/Console/cake Migrations.migration run all -p $PLUGIN_NAME -c test -i test
./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr || exit $?
echo $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration
ls -al $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration
ls -al app/Plugin/$PLUGIN_NAME/Config/Migration
ls -al app/Plugin/$PLUGIN_NAME/Config/Schema
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,app/Plugin/$PLUGIN_NAME/Config/Migration,app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS app/Plugin/$PLUGIN_NAME || exit $?
phpmd app/Plugin/$PLUGIN_NAME text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Migration,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Config/Schema,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app/Plugin/$PLUGIN_NAME
if [ -d ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
  ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
fi
