#!/bin/bash -ex

# coveralls
cd $TRAVIS_BUILD_DIR
php vendors/bin/coveralls --root_dir . -vvv

## phpdoc
if [ "$TRAVIS_BRANCH" == "master" ]; then
  LOG=/var/log/phpdoc.log
  LOG2=/var/log/phpdoc2.log

  sudo touch $LOG
  sudo chmod a+w $LOG

  sudo touch $LOG
  sudo chmod a+w $LOG

  PHP_VERSION=`php --version`
  if [ $GH_TOKEN ]; then
    if [ `echo "`php --version`" | grep "^PHP 5.5"` ]; then
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
