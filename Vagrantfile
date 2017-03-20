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
        vb.memory = "512"
    end
    config.vm.provision "shell", path: "bootstrap.sh"

    #full-stack
    config.vm.define "fullstack" do |fullstack|
      fullstack.vm.hostname = "full-stack"
      fullstack.vm.network "private_network", ip: "172.28.128.103", bridge: "en0: Ethernet"
      fullstack.vm.synced_folder "/Users/lvovych/Documents/development/full-stack/web", "/opt/data/web", owner:"www-data", group:"www-data"

    end

end
