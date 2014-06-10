#!/bin/bash -ex

./lib/Cake/Console/cake test app All --stderr --configuration phpunit.xml.dist || exit $?
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app || exit $?
phpmd app text ruleset/phpmd.xml --exclude $TRAVIS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config $IGNORE_PLUGINS_OPTS app
