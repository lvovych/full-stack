# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
    config.vm.box = "/Users/lvovych/.vagrant/package.box"
    config.ssh.private_key_path = "/Users/lvovych/.ssh/vagrant/id_rsa"    
    config.vm.provider "virtualbox" do |vb|
    	vb.gui = false
    	vb.memory = "768"
    end
    config.vm.provision "shell", path: "bootstrap.sh"

    #Node01
    config.vm.define "learn" do |learn|
      learn.vm.hostname = "learn"
      learn.vm.network "private_network", type: "dhcp", bridge: "en0: Ethernet"
      config.vm.synced_folder "/Users/lvovych/Documents/development/full-stack/web", "/opt/data/web", owner:"www-data", group:"www-data"

    end

    # #Node02
    # config.vm.define "node02" do |node02|
    #   node02.vm.hostname = "node02"
    #   node02.vm.network "private_network", type: "dhcp", bridge: "en0: Ethernet"
    #   node02.vm.network "public_network", bridge: "en0: Ethernet"
    # end

end
