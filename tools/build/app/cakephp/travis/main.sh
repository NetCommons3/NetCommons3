#!/bin/bash -ex

export PATH=$PATH:./vendors/bin

# php
app/Console/cake test app All --stderr --configuration phpunit.xml.dist || exit $?
phpcs -p --extensions=php --standard=./vendors/cakephp/cakephp-codesniffer/CakePHP --ignore=app/Config/Migration/,app/Config/database.php,app/Config/Schema/schema.php,$IGNORE_PLUGINS app || exit $?
phpmd app text /etc/phpmd/rules.xml --exclude $TRAVIS_BUILD_DIR/app/Plugin,$TRAVIS_BUILD_DIR/app/Config/Migration,$TRAVIS_BUILD_DIR/app/Config/Schema/schema.php,$IGNORE_PLUGINS || exit $?
phpcpd --exclude Test --exclude TestSuite --exclude Config --exclude Vendor $IGNORE_PLUGINS_OPTS app

# js
gjslint --strict -x jquery.js,jquery.cookie.js,js_debug_toolbar.js,travis.karma.conf.js,my.karma.conf.js -e jasmine_examples,HtmlPurifier -r app || exit $?
