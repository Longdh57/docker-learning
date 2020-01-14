PHP:7.3-FPM (php-product)
	- port: 9000
	- cài mysqli, pdo_mysql:
		docker-php-ext-install mysqli
		docker-php-ext-install pdo_mysql
	- Thư mục làm việc: /home/sites/site1

Apache HTTPD (c-httpd)
	- port: 80, 443
	- config: /usr/local/apache2/conf/httpd.conf
		Nạp mod_proxy, mod_proxy_fcgi
		- Thư mục làm việc: /home/sites/site1
		- index mặc định: index.html, index.php
		- PHPHANDLER: AddHandler "proxy:fcgi://php-product:9000" .php

Mysql (mysql-product)
	- port: 3306
	- config: /etc/mysql/my.cnf
		- default-authentication-plugin = mysql_native_password
	- databases: /var/lib/mysql => /compose/db
	- MYSQL_ROOT_PASSWORD: 123abc
	- MYSQL_DATABASE: db_site
	- MYSQL_USER: siteuser
	- MYSQL_PASSWORD: sitepass

NETWORK:
	- bridge
	- my-network

VOLUME: dir-site
	- bind, devide = /compose/