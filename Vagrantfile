# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure('2') do |config|
  config.vm.box = 'precise64'
  config.vm.box_url = 'http://files.vagrantup.com/precise64.box'

  config.vm.network :forwarded_port, guest: 80, host: 9090
  config.vm.network :private_network, ip: '10.0.0.10'
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.ignore_private_ip = true
  config.vm.define 'default' do |node|
    node.vm.hostname = 'app.local'
    node.hostmanager.aliases = %w(
      sphinx.local phpdoc.local phpldapadmin.local redmine.local jenkins.local
    )
  end
  config.vm.provision :hostmanager

  config.vm.synced_folder '.', '/var/www/app',
    :create => true, :owner=> 'www-data', :group => 'www-data',
    :mount_options => ['dmode=775', 'fmode=775']

  config.vm.provider :virtualbox do |vb|
    vb.gui = false
    vb.customize ['modifyvm', :id, '--memory', '2048']
  end

  config.berkshelf.enabled = true
  config.omnibus.chef_version = :latest
  CHEF_ROOT = 'tools/chef'.freeze
  json = JSON.parse(Pathname(__FILE__).dirname.join(CHEF_ROOT + '/nodes', 'vagrant.json').read)
  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = ['site-cookbooks', 'cookbooks']
    chef.custom_config_path = "tools/chef/Vagrantfile.chef"
    chef.data_bags_path = CHEF_ROOT + '/data_bags'
    chef.run_list = json.delete('run_list')
    chef.json = json
  end
end
