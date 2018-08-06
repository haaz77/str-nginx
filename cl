#!/bin/bash 
cp clint/nginx.conf /usr/local/nginx/conf/
mkdir /var/www
cp clint/index.php /var/www/
cp clint/www.conf /etc/php-fpm.d/www.conf 
cp all/nginxd /etc/init.d/
service php-fpm start 
/etc/init.d/nginxd start 
chkconfig php-fpm on 
chkconfig nginxd  on 
