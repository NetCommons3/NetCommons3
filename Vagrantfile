# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.vm.define 'default' do |node|
    node.vm.hostname = "www.netcommons.local"
    node.hostmanager.aliases = %w(docs.netcommons.local)
  end

  config.vm.synced_folder "./", "/vagrant_data", :create => true, :owner=> 'www-data', :group=>'www-data', :mount_options => ['dmode=775','fmode=775']
  config.vm.synced_folder "../NetCommons3Docs/", "/var/www/NetCommons3Docs", :create => true, :owner=> 'www-data', :group=>'www-data', :mount_options => ['dmode=775','fmode=775']
  doc_root = '/vagrant_data/app/webroot'

  config.berkshelf.enabled = true

  config.vm.provider :virtualbox do |vb|
    vb.gui = false
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "./cookbooks"
    chef.add_recipe "omusubi"
    chef.json = { doc_root: doc_root}
  end
end
