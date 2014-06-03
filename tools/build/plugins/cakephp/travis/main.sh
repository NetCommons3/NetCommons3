#!/bin/bash -ex

echo $IGNORE_PLUGINS
./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr || exit $?
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app || exit $?
phpmd app text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app || exit $?
if [ -e ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
  ./node_modules/karma/bin/karma start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS || exit $?
fi

exit 0
