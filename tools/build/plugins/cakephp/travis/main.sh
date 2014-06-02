#!/bin/bash -ex

./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr
echo "Running phpcs..."
phpcs -p --extensions=php,ctp --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app
if [ $? != 0 ]
    then
        echo "**** Coding standards failed ****"
        EXIT=1
fi
echo -n "Running phpmd..."
phpmd app text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS
if [ $? != 0 ]
    then
        echo "**** Mess detection failed ****"
        EXIT=1
fi
echo -n "Running phpcpd..."
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app
if [ $? != 0 ]
    then
        echo "**** Copy/Paste detection failed ****"
        EXIT=1
fi
if [ -e ./app/Plugin/$PLUGIN_NAME/JavascriptTest/ ]; then
./node_modules/karma/bin/karma  start app/Plugin/$PLUGIN_NAME/JavascriptTest/travis.karma.conf.js --single-run --browsers PhantomJS
fi
exit $EXIT
