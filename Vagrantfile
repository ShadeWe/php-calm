# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Box settings
  config.vm.box = "ubuntu/xenial64"

  # Network settings
  config.vm.network "forwarded_port", guest: 80, host: 8080
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  config.vm.network "private_network", ip: "192.168.33.10"
  # config.vm.network "public_network"

  # Folder settings
  config.vm.synced_folder "./", "/var/www/html"

  # Provider settings
  config.vm.provider "virtualbox" do |vb|
    # vb.gui = true
  end

  # Provision settings
  config.vm.provision "shell", inline: <<-SHELL
    
    sudo apt-add-repository -y ppa:ondrej/php

    sudo apt-get -y update
    sudo apt-get -y upgrade
    sudo apt-get -y install php7.4-fpm --allow-unauthenticated
    sudo apt-get -y install apache2 --allow-unauthenticated
    sudo apt-get -y install libapache2-mod-fcgid --allow-unauthenticated
    
    # enable necessary configs and mods
    sudo a2enconf php7.4-fpm
    sudo a2enmod rewrite
    sudo a2enmod proxy
    sudo a2enmod proxy_fcgi

    sudo service apache2 restart

    # composer global installation
    sudo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    sudo php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    sudo php composer-setup.php --install-dir='/usr/local/bin' --filename=composer
    sudo php -r "unlink('composer-setup.php');"

  SHELL
end
