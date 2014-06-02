#!/bin/bash -ex

./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr
eval "phpcs -p --extensions=php,ctp --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app"
if [ $? != 0 ]
    then
        exit 1
fi
eval "phpmd app text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS"
if [ $? != 0 ]
    then
        exit 1
fi
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app

if [ -e ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
./node_modules/karma/bin/karma  start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS
fi
