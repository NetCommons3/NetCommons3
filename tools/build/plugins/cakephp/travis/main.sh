#!/bin/bash -ex

./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr || exit $?
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app/Plugin/$PLUGIN_NAME || exit $?
phpmd app/Plugin/$PLUGIN_NAME text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app/Plugin/$PLUGIN_NAME
# if [ -e ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
#   ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
# fi

echo 'test'

exit 0
