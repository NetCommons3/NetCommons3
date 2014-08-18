#!/bin/bash -ex

# php
./lib/Cake/Console/cake test app All --stderr --configuration phpunit.xml.dist || exit $?
phpcs -p --extensions=php --standard=CakePHP --ignore=app/Config/Migration/,app/Config/database.php,$IGNORE_PLUGINS app || exit $?
phpmd app text /etc/phpmd.xml --exclude $TRAVIS_BUILD_DIR/app/Config/Migration,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude Config --exclude Vendor $IGNORE_PLUGINS_OPTS app

# js
gjslint --strict -x jquery.js,jquery.cookie.js,js_debug_toolbar.js -e jasmine_examples -r app || exit $?
