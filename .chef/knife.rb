log_level                :info
log_location             STDOUT
node_name                'vagrant'
client_key               'vagrant.pem'
validation_client_name   'chef-validator'
validation_key           '/etc/chef-server/chef-validator.pem'
chef_server_url          'https://chef.local:443'
syntax_check_cache_path  'syntax_check_cache'
