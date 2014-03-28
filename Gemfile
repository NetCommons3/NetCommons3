source "https://rubygems.org"

gem 'activesupport'
gem 'bundler'
gem 'berkshelf'
gem 'nokogiri'
gem 'rake'
gem 'mysql'
gem 'pg'

# Some of the cookbooks in use still failing due to the breaking changes made in 11.x.
# So we'll stick on 10.x till those cookbooks get ready.
# @see http://docs.opscode.com/breaking_changes_chef_11.html
gem 'chef', '~> 10.14'

# Workaround for error below
# FATAL: LoadError: template[/etc/php5/cli/php.ini] (vagrant::default line 147) had an error: LoadError: cannot load such file -- moneta/basic_file]
# @see http://stackoverflow.com/questions/14616051/chef-cannot-load-such-file-moneta-basic-file
gem 'moneta', '~> 0.6.0'

group :development, :test do
  gem 'guard'
  gem 'guard-bundler'
  gem 'guard-jasmine'
  gem 'guard-jshint-node'
  gem 'guard-kitchen'
  gem 'guard-livereload'
  gem 'guard-phpcs'
  gem 'guard-phpmd'
  gem 'guard-phpunit2'
  gem 'guard-shell'
  gem 'jasmine'
  gem 'juicer'
  gem 'kitchen-vagrant'
  gem 'libnotify'
  gem 'rcodetools'
  gem 'ruby-prof'
  gem 'test-kitchen'
  gem 'jekyll'
  gem 'travis'
  gem 'travis-lint'
  gem 'knife-solo'
end
