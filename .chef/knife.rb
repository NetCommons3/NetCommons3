log_level                :info
log_location             STDOUT
node_name                'vagrant'
client_key               'vagrant.pem'
validation_client_name   'chef-validator'
validation_key           '/etc/chef-server/chef-validator.pem'
chef_server_url          'https://chef.local:443'
syntax_check_cache_path  'syntax_check_cache'

CHEF_ROOT = 'tools/chef'.freeze

cookbook_path             ["#{CHEF_ROOT}/cookbooks", "#{CHEF_ROOT}/site-cookbooks"]
node_path                 "#{CHEF_ROOT}/nodes"
role_path                 "#{CHEF_ROOT}/roles"
environment_path          "#{CHEF_ROOT}/environments"
data_bag_path             "#{CHEF_ROOT}/data_bags"
encrypted_data_bag_secret "#{CHEF_ROOT}/data_bag_key"
