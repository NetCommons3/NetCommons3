#!/bin/bash -ex

## phpdoc
LOG=/var/log/phpdoc.log
LOG2=/var/log/phpdoc2.log

sudo touch $LOG
sudo chmod a+w $LOG

sudo touch $LOG
sudo chmod a+w $LOG

export GIT_COMMITTER_NAME=s-nakajima
export GIT_COMMITTER_EMAIL=nakajimashouhei@gmail.com
export GIT_AUTHOR_NAME=s-nakajima
export GIT_AUTHOR_EMAIL=nakajimashouhei@gmail.com

echo $TRAVIS_BRANCH
echo $GH_TOKEN

if [ "$TRAVIS_BRANCH" == "master" ]; then
  if [ $GH_TOKEN ]; then
    git clone -b gh-pages git://github.com/NetCommons3/NetCommons3Docs $NETCOMMONS_BUILD_DIR/NetCommons3Docs
    cd $NETCOMMONS_BUILD_DIR/NetCommons3Docs
	
    PHPDOC_OPTIONS="$NETCOMMONS_BUILD_DIR/app/Controller/,$NETCOMMONS_BUILD_DIR/app/Lib/,$NETCOMMONS_BUILD_DIR/app/Locale/,$NETCOMMONS_BUILD_DIR/app/Model/,$NETCOMMONS_BUILD_DIR/app/Test/,$NETCOMMONS_BUILD_DIR/app/Vendor/,$NETCOMMONS_BUILD_DIR/app/View/,$NETCOMMONS_BUILD_DIR/app/Plugin/NetCommons/"
	
    if [ -d phpdoc/$PLUGIN_NAME ]; then
      rm -r phpdoc/$PLUGIN_NAME
    fi
    echo "phpdoc $NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME"
    phpdoc run -d "$PHPDOC_OPTIONS,$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME" -t phpdoc/$PLUGIN_NAME -i "$NETCOMMONS_BUILD_DIR/app/Plugin/$PLUGIN_NAME/Test/*" --cache-folder phpdoc/$PLUGIN_NAME/cache --force --ansi --log $LOG2 > $LOG
	
    rm -r phpdoc/$PLUGIN_NAME/cache
	
    git add -A
    git commit -m "Update phpdoc $PLUGIN_NAME"
	
    git push --quiet https://$GH_TOKEN@github.com/NetCommons3/NetCommons3Docs.git 2> /dev/null
  fi
fi

# coveralls
php vendors/bin/coveralls --root_dir . -vvv || exit $?
