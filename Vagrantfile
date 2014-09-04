# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure('2') do |config|
  config.vm.box = 'precise64'
  config.vm.box_url = 'http://files.vagrantup.com/precise64.box'

  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.ignore_private_ip = true

  CHEF_ROOT = 'tools/chef'.freeze

  # Setup default vm
  config.vm.define 'default', primary: true do |node|
    node.vm.network :forwarded_port, guest: 80, host: 9090, auto_correct: true
    node.vm.network :private_network, ip: '10.0.0.10'
    node.vm.hostname = 'app.local'
    node.hostmanager.aliases = %w(
      sphinx.local phpdoc.local phpldapadmin.local redmine.local jenkins.local
    )
    node.vm.provision :chef_solo do |chef|
      chef.cookbooks_path = ['site-cookbooks', 'cookbooks']
      chef.custom_config_path = CHEF_ROOT + '/Vagrantfile.chef'
      chef.data_bags_path = CHEF_ROOT + '/data_bags'
      chef.roles_path = CHEF_ROOT + '/roles'
      chef.environments_path = CHEF_ROOT + '/environments'
      chef.environment = 'development'
      # chef.add_role('mdb')
      json = JSON.parse(Pathname(__FILE__).dirname.join(CHEF_ROOT + '/nodes', 'vagrant.json').read)
      chef.run_list = json.delete('run_list')
      chef.json = json
    end
    node.vm.provider :virtualbox do |vb|
      vb.gui = false
      vb.memory = 2048
    end
    node.vm.synced_folder '.', '/var/www/app',
    :create => true, :owner=> 'www-data', :group => 'www-data'
  end

  # Setup mysql slave
  config.vm.define 'sdb' do |node|
    node.vm.network :private_network, ip: '10.0.0.11'
    node.vm.hostname = 'sdb.local'
    node.vm.provision :chef_solo do |chef|
      chef.cookbooks_path = ['site-cookbooks', 'cookbooks']
      chef.custom_config_path = CHEF_ROOT + '/Vagrantfile.chef'
      chef.data_bags_path = CHEF_ROOT + '/data_bags'
      chef.roles_path = CHEF_ROOT + '/roles'
      chef.environments_path = CHEF_ROOT + '/environments'
      chef.environment = 'development'
      chef.add_role('sdb')
      chef.json = JSON.parse(Pathname(__FILE__).dirname.join(CHEF_ROOT + '/nodes', 'sdb.json').read)
    end
    # node.vm.provision :chef_client do |chef|
    #   # chef.cookbooks_path = ['site-cookbooks', 'cookbooks']
    #   # chef.custom_config_path = CHEF_ROOT + '/Vagrantfile.chef'
    #   # chef.data_bags_path = CHEF_ROOT + '/data_bags'
    #   # chef.roles_path = CHEF_ROOT + '/roles'
    #   # chef.chef_server_url = 'https://chef.local:443'
    #   # chef.client_key_path = '.chef/vagrant.pem'
    #   chef.validation_key_path = '.chef/chef-validator.pem'
    #   chef.add_role('sdb')
    # end
    node.vm.provider :virtualbox do |vb|
      vb.gui = false
      vb.cpus = 1
      vb.memory = 512
    end
  end

  # Setup chef server
  config.vm.define 'chef' do |node|
    node.vm.network :private_network, ip: '10.0.0.12'
    node.vm.hostname = 'chef.local'
    node.vm.provision :chef_solo do |chef|
      chef.custom_config_path = CHEF_ROOT + '/Vagrantfile.chef'
      chef.json = {
        'chef-server' => {
          'version' => :latest
        }
      }
      chef.run_list = [
        'recipe[chef-server::default]'
      ]
    end
    node.vm.provider :virtualbox do |vb|
      vb.gui = false
      vb.cpus = 1
      vb.memory = 1024
    end
  end

  config.vm.provision :hostmanager
  config.berkshelf.enabled = true
  config.omnibus.chef_version = :latest
end
