service mysql start

chown -R www-data /var/www/*
chmod -R 755 /var/www/*

mkdir /var/www/mysite
mkdir /var/www/mysite/site && touch /var/www/mysite/site/index.php
echo "<?php phpinfo(); ?>" >> /var/www/mysite/site/index.php

mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/mysite.pem -keyout /etc/nginx/ssl/mysite.key -subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=acarnati/CN=mysite"

mv ./tmp/nginx.conf /etc/nginx/sites-available/mysite
ln -s /etc/nginx/sites-available/mysite /etc/nginx/sites-enabled/mysite
rm -rf /etc/nginx/sites-enabled/default

echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password

mkdir /var/www/mysite/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
tar -xvf phpMyAdmin-5.0.2-all-languages.tar.gz --strip-components 1 -C /var/www/mysite/phpmyadmin
mv ./tmp/config.inc.php /var/www/mysite/phpmyadmin/config.inc.php

cd /tmp/
wget -c https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/ /var/www/mysite
mv /tmp/wp-config.php /var/www/mysite/wordpress

service php7.3-fpm start
service nginx start
bash
