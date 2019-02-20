#!/bin/bash -ex

export PATH=$PATH:./vendors/bin:$NETCOMMONS_BUILD_DIR/vendors/bin

cd $NETCOMMONS_BUILD_DIR

# phpdoc
if [ "$TRAVIS_BRANCH" = "master" -a "$DB" = "mysql" ]; then
  if [ $GH_TOKEN ]; then
    PHP_VERSION="`php --version`"
    check=`echo $PHP_VERSION | grep "^PHP 5.6"`

    if [ ! "$check" = "" ]; then
      LOG=$NETCOMMONS_BUILD_DIR/app/tmp/logs/phpdoc.log
      LOG2=$NETCOMMONS_BUILD_DIR/app/tmp/logs/phpdoc2.log

      touch $LOG
      chmod a+w $LOG

      touch $LOG2
      chmod a+w $LOG2

      git clone -b gh-pages git://github.com/NetCommons3/NetCommons3Docs $NETCOMMONS_BUILD_DIR/NetCommons3Docs
      cd $NETCOMMONS_BUILD_DIR/NetCommons3Docs

      PHPDOC_OPTIONS="$NETCOMMONS_BUILD_DIR/app/Controller/,$NETCOMMONS_BUILD_DIR/app/Lib/,$NETCOMMONS_BUILD_DIR/app/Locale/,$NETCOMMONS_BUILD_DIR/app/Model/,$NETCOMMONS_BUILD_DIR/app/Test/,$NETCOMMONS_BUILD_DIR/app/Vendor/,$NETCOMMONS_BUILD_DIR/app/View/,$NETCOMMONS_BUILD_DIR/app/Plugin/NetCommons/"

      if [ -d phpdoc/$PLUGIN_NAME ]; then
        rm -r phpdoc/$PLUGIN_NAME
      fi
      echo "phpdoc $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME"
      phpdoc run -d "$PHPDOC_OPTIONS,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME" -t phpdoc/$PLUGIN_NAME -i "*/Test/*" --cache-folder phpdoc/$PLUGIN_NAME/cache --force --ansi --log $LOG2 > $LOG

      rm -r phpdoc/$PLUGIN_NAME/cache

      git add -A
      git commit -m "Update phpdoc $PLUGIN_NAME"

      git push --quiet https://$GH_TOKEN@github.com/NetCommons3/NetCommons3Docs.git 2> /dev/null
    fi
  fi
fi

# coveralls
# @link https://github.com/NetCommons3/NetCommons3/blob/0d675cf01786a79ed9c3a5faeb198b808686e3f2/tools/build/app/cakephp/travis/pre.sh#L10
PHP_VERSION="`php --version`"
check54=`echo $PHP_VERSION | grep "^PHP 5.4"`
cd $NETCOMMONS_BUILD_DIR
if [ ! "$check54" = "" ]; then
	php vendors/bin/coveralls --root_dir . -vvv || exit $?
else
	php vendors/bin/php-coveralls --root_dir . -vvv || exit $?
fi
