#
# Cookbook Name:: netcommons
# Recipe:: default
#

include_recipe 'boilerplate_php'

%w( postgresql-server-dev-all ).each do |pkg|
  package pkg do
    action [:install]
  end
end

# Install gem packages
execute 'install netcommons related gem packages' do
  command "cd #{node[:boilerplate][:app_root]}; gemrat pg --no-version"
  only_if { ::File.exists?("#{node[:boilerplate][:app_root]}/Gemfile")}
end

## Setup apache
include_recipe 'apache2'

apache_module 'rewrite' do
  enable true
end

## Setup postgresql
include_recipe 'postgresql::server'

template "#{node[:postgresql][:dir]}/pg_hba.conf" do
  source 'postgresql/pg_hba.conf'
  notifies :restart, 'service[postgresql]'
end

## Setup samba
package 'samba'
template "/etc/samba/smb.conf" do
  source 'samba/smb.conf'
end

service 'smbd' do
  action :restart
end
