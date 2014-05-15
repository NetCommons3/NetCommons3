#!/bin/bash -ex

./lib/Cake/Console/cake test $PLUGIN_NAME All$PLUGIN_NAME --stderr
phpcs -p --extensions=php,ctp --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app
phpmd app text ruleset/phpmd.xml --exclude $NETCOMMONS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS
phpcpd --exclude Test --exclude Config --exclude app/Config/database.php $IGNORE_PLUGINS_OPTS app
