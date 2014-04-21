CHEF_ROOT = 'tools/chef'.freeze

cookbook_path             ["#{CHEF_ROOT}/cookbooks", "#{CHEF_ROOT}/site-cookbooks"]
node_path                 "#{CHEF_ROOT}/nodes"
role_path                 "#{CHEF_ROOT}/roles"
environment_path          "#{CHEF_ROOT}/environments"
data_bag_path             "#{CHEF_ROOT}/data_bags"
encrypted_data_bag_secret "#{CHEF_ROOT}/data_bag_key"

