#!/usr/bin/env bash

# Configure hosts
cat <<'EOT' > /etc/hosts
127.0.0.1	full-stack	full-stack.local
127.0.0.1	localhost
::1     localhost ip6-localhost ip6-loopback
ff02::1 ip6-allnodes
ff02::2 ip6-allrouters
EOT

# Configure Dotdeb repo for install php7
echo '# Dotdeb is an extra repository providing up-to-date packages' >> /etc/apt/sources.list
echo 'deb http://packages.dotdeb.org jessie all' >> /etc/apt/sources.list
echo 'deb-src http://packages.dotdeb.org jessie all' >> /etc/apt/sources.list

cd /tmp && wget https://www.dotdeb.org/dotdeb.gpg
sudo apt-key add dotdeb.gpg && rm dotdeb.gpg

# Install my base enviroment
aptitude update && aptitude install -y mc ccze htop git

# Install and prepare Nginx + PHP5.6
aptitude install -y nginx && aptitude install -y php7.0-fpm php7.0-curl php7.0-xdebug php7.0-pdo-mysql

rm /etc/nginx/sites-enabled/default
touch /etc/nginx/sites-available/full-stack.local
cat <<'EOT' > /etc/nginx/sites-available/full-stack.local
## full-stack.local
server {
	listen 80;
	root /opt/data/web;
	index index.php index.html index.htm;

	server_name full-stack.local;

	location / {
		try_files $uri $uri/ =404;
	}
	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/run/php/php7.0-fpm.sock;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	}
}
EOT
# xdebug setings
cat <<'EOT' > /etc/php/7.0/fpm/conf.d/20-xdebug.ini
zend_extension=/usr/lib/php/20151012/xdebug.so
xdebug.remote_enable=1
xdebug.remote_host="172.28.128.1"
xdebug.remote_port=9089
xdebug.remote_handler="dbgp"
xdebug.idekey="PHPSTORM"
EOT

# enable site
ln -sf /etc/nginx/sites-available/full-stack.local /etc/nginx/sites-enabled/full-stack.local && systemctl restart php7.0-fpm nginx
