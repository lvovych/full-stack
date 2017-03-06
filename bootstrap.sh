#!/usr/bin/env bash

# Install my base enviroment
aptitude update && aptitude install -y mc ccze htop
sed 's/dev-srv/learn/g' /etc/hosts

# Installing the Pacemaker/Corosync 2.X HA cluster stack with ngnix and php-fpm
# ####
# cat > /etc/apt/sources.list.d/jessie-backports.list << "EOF"
# deb http://http.debian.net/debian jessie-backports main
# EOF
# aptitude update && aptitude install -y -t jessie-backports pacemaker crmsh
# aptitude install -y nginx 
# aptitude install -y php5-fpm && service nginx stop && systemctl disable nginx
# systemctl disable pacemaker
# #####

# Install and prepare Nginx + PHP5.6
aptitude install -y nginx && aptitude install -y php5-fpm 

rm /etc/nginx/sites-enabled/default 

touch /etc/nginx/sites-available/learn.local

cat <<'EOT' >> /etc/nginx/sites-available/learn.local
## learn.local
server {
	listen 80;
	root /opt/data/web;
	index index.php index.html index.htm;

	server_name learn.local;

	location / {
		try_files $uri $uri/ =404;
	}
	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/var/run/php5-fpm.sock;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		
	}

}
EOT

# sed 's/learn/$"hostname"/g' /etc/nginx/sites-available/$"hostname"
ln -sf /etc/nginx/sites-available/learn.local /etc/nginx/sites-enabled/learn.local && systemctl restart nginx
