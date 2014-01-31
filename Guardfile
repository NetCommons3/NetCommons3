ignore(/(min|dev)\.(js|css)$/)
ignore(%r{^docs/build/*/.*\.(js|css)$})

# Update bundle
guard :bundler do
  watch('Gemfile')
end

# Minify js
guard 'shell' do
  watch(%r{.*\.js$}) do |m|
    n "#{m[0]} Changed"

    `juicer -q merge -f -s app/webroot/js/master.js -o app/webroot/js/master.min.js`
    `juicer -q merge -f app/webroot/js/master.lang.js -o app/webroot/js/master.lang.min.js`
    `juicer -q merge -m none -f -s app/webroot/js/master.js -o app/webroot/js/master.dev.js`
    `juicer -q merge -m none -f -s app/webroot/js/master.lang.js -o app/webroot/js/master.lang.dev.js`
  end
end

# Minify css
guard 'shell' do
  watch(%r{.*\.css$}) do |m|
    n "#{m[0]} Changed"

    `juicer -q merge -f app/webroot/css/master.css -o app/webroot/css/master.min.css -d app/webroot/`
    `juicer -q merge -m none -f app/webroot/css/master.css -o app/webroot/css/master.dev.css -d app/webroot/`
  end
end

# Run tests
guard 'shell' do
  watch(%r{^.+Test\.php$}) do |m|
    n "#{m[0]} Changed"

    # Init database
    `mysql -uroot -proot -e 'DROP DATABASE IF EXISTS cakephp_test;'`
    `mysql -uroot -proot -e 'DROP DATABASE IF EXISTS cakephp_test2;'`
    `mysql -uroot -proot -e 'DROP DATABASE IF EXISTS cakephp_test3;'`
    `mysql -uroot -proot -e 'CREATE DATABASE cakephp_test;'`
    `mysql -uroot -proot -e 'CREATE DATABASE cakephp_test2;'`
    `mysql -uroot -proot -e 'CREATE DATABASE cakephp_test3;'`
    `cp app/Config/database.php app/Config/database.php.orig`
    `cp app/Config/database.php.test app/Config/database.php`

    # Invoke tests
    target = m[0].gsub(/app\/Test\/Case\/([\w\/]+)Test\.php$/, '\1')
    n "app/Console/cake test app #{target} --stderr"
    `app/Console/cake test app #{target} --stderr`
    `cp app/Config/database.php.orig app/Config/database.php`
    `rm -f app/Config/database.php.orig`
  end
end

# Installed by guard-phpcs
guard 'phpcs', :standard => 'CakePHP' do
  watch(%r{.*\.php$})
end

# Installed by guard-phpmd
guard 'phpmd', :rules => 'ruleset/phpmd.xml' do
  watch(%r{.*\.php$})
end

# Generate docs
guard 'shell' do
  watch(%r{.*\.rst$}) do |m|
    `cd docs; make html; cd -`
  end
end

# Installed by guard-jshint-node
# guard 'jshint-node', :config => 'jshint-config.json' do
#   watch(%r{.*\.js$})
# end

guard 'livereload' do
  watch(%r{.*\.(php|ctp|css|js|rst)$})
end
