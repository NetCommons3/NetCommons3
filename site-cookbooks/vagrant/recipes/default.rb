# Configure your sources.list to the nearby mirror
execute "update sources.list" do
  command "sed -i 's/us.archive/ja.archive/g' /etc/apt/sources.list"
end

execute "add prebuilt hhvm repository" do
  command "echo deb http://dl.hhvm.com/ubuntu precise main | sudo tee /etc/apt/sources.list.d/hhvm.list"
  not_if { ::File.exists?("/etc/apt/sources.list.d/hhvm.list")}
end

# Update apt packages
execute "apt-get update" do
  command "apt-get update"
end

# Install packages necessary before installation
%w{ python-software-properties }.each do |pkg|
  package pkg do
    action [:install]
  end
end

# Add extra repos
execute "add latest emacs repository" do
  command "add-apt-repository -y ppa:cassou/emacs; apt-get update"
  not_if { ::File.exists?("/etc/apt/sources.list.d/cassou-emacs-#{node[:lsb][:codename]}.list")}
end

execute "add latest nodejs repository" do
  command "add-apt-repository -y ppa:chris-lea/node.js; apt-get update"
  not_if { ::File.exists?("/etc/apt/sources.list.d/chris-lea-node_js-#{node[:lsb][:codename]}.list")}
end

# Install packages necessary for this project
packages = %w{
  php5 php5-curl php5-cli php5-imagick php5-xdebug php5-mcrypt php5-xsl php5-ldap php-pear
  openjdk-7-jdk nodejs
  git subversion
  apache2-utils apache2.2-bin apache2.2-common apache2-mpm-prefork libapache2-mod-php5
  slapd ldap-utils
  libxml2-dev libxslt-dev libcurl4-gnutls-dev
  mysql-server libmysql++-dev postgresql postgresql-server-dev-all
  curl imagemagick graphviz
  lv zsh tree axel expect make g++
  global w3m aspell exuberant-ctags wamerican-huge stunnel4
  emacs24 emacs-goodies-el debian-el gettext-el
  iftop iotop iperf nethogs sysstat
  ruby1.9.1 ruby1.9.1-dev libnotify-bin
  python-setuptools
}
dependencies = []

packages.each do |pkg|
  if node.default[:versions][pkg].kind_of? String
    dependencies << [pkg, node.default[:versions][pkg]].join('=')
  else
    dependencies << pkg
  end
end

execute "apt-get install" do
  command "DEBIAN_FRONTEND=noninteractive apt-get -q -y install #{dependencies.join(' ')}"
end

# Install hhvm separately since it's yet authenticated
execute "install hhvm" do
  command "apt-get -q -y --force-yes install hhvm"
  not_if { ::File.exists?("/usr/bin/hhvm")}
end

# Disabled default package resource because it cannot pass
# multiple package at once to apt command, which leads to huge performance kill.
# packages.each do |pkg|
#   package pkg do
#     action [:install, :upgrade]
#     version node.default[:versions][pkg] if node.default[:versions][pkg].kind_of? String
#   end
# end

execute "install bundler" do
  command "gem i bundler"
end

execute "install gem packages" do
  command "cd /vagrant_data; bundle"
end

%w{ yui_compressor jslint closure_compiler }.each do |package|
  execute "juicer install #{package}" do
    command "juicer install #{package}"
    not_if { ::File.exists?("#{ENV['HOME']}/.juicer/lib/#{package}")}
  end
end

execute "install npm packages" do
  command "npm -g install jshint grunt-cli gfms"
end

execute "install easy_install packages" do
  command "easy_install -U sphinx sphinxcontrib-phpdomain"
end

# Install pear packages
execute "install phpunit" do
  command "pear config-set auto_discover 1; pear install pear.phpunit.de/PHPUnit"
  not_if { ::File.exists?("/usr/bin/phpunit")}
end

execute "install phpcs" do
  command "pear channel-discover pear.cakephp.org; pear install --alldeps cakephp/CakePHP_CodeSniffer"
  not_if { ::File.exists?("/usr/bin/phpcs")}
end

execute "install phpmd" do
  command "pear channel-discover pear.phpmd.org; pear channel-discover pear.pdepend.org; pear install phpmd/PHP_PMD"
  not_if { ::File.exists?("/usr/bin/phpmd")}
end

execute "install phpcpd" do
  command "pear install pear.phpunit.de/phpcpd"
  not_if { ::File.exists?("/usr/bin/phpcpd")}
end

execute "install phpdoc" do
  command "pear channel-discover pear.phpdoc.org; pear install phpdoc/phpDocumentor"
  not_if { ::File.exists?("/usr/bin/phpdoc")}
end

# Install or update composer
composer "/vagrant_data" do
  action [:install, :update]
end

# Update composer packages
execute "update composer packages" do
  command "cd /vagrant_data; `which composer` update"
end

# Deploy configuration files
## Setup php
template "/etc/php5/cli/php.ini" do
  source "php.ini.erb"
  mode 0644
  variables(:directives => node[:php][:directives])
end

## Setup apache
include_recipe "apache2"

apache_site "000-default" do
  enable false
end

template "#{node[:apache][:dir]}/sites-available/netcommons.conf" do
  source "netcommons.conf.erb"
  notifies :restart, 'service[apache2]'
end

apache_module "rewrite" do
  enable true
end

apache_site "netcommons.conf" do
  enable true
end

## Setup mysql
include_recipe "mysql::server"

mysql_connection_info = {
  :host     => 'localhost',
  :username => 'root',
  :password => node['mysql']['server_root_password']
}

mysql_database_user 'test' do
  connection mysql_connection_info
  password   'test'
  action     :grant
end

template "/etc/mysql/conf.d/my.cnf" do
  source "mysql/my.cnf"
  notifies :restart, 'service[mysql]'
end

## Setup postgresql
include_recipe "postgresql::server"

# postgresql_connection_info = {
#   :host     => 'localhost',
#   :port     => node['postgresql']['config']['port'],
#   :username => 'postgres',
#   :password => node['postgresql']['password']['postgres']
# }

# execute "create role test" do
#   user "postgres"
#   command "psql -c 'DROP ROLE IF EXISTS test; CREATE ROLE test;' -U postgres;"
# end

# postgresql_database_user 'test' do
#   connection postgresql_connection_info
#   database_name 'test_nc3'
#   password   'test'
#   action     :grant
# end

template "#{node[:postgresql][:dir]}/pg_hba.conf" do
  source "postgresql/pg_hba.conf"
  notifies :restart, 'service[postgresql]'
end

template "/vagrant_data/.git/hooks/pre-commit" do
  source "git/pre-commit"
end

# Add custom permissions
%w{ www-data }.each do |group|
  group group do
    action :modify
    members "vagrant"
    append true
  end
end
