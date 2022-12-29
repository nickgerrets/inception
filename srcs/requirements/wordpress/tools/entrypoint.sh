#!/bin/bash

chown -R www-data:www-data /var/www/*;
chown -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

if [ ! -f /var/www/html/wp-config.php ]; then
	echo "Installing, please wait..."
	mkdir -p /var/www/html
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
	chmod 755 wp-cli.phar; 
	mv wp-cli.phar /usr/local/bin/wp;
	mv /tmp/wp-config.php /var/www/html/
	cd /var/www/html;
	wp core download --allow-root;
	wp core install --url=${WP_URL} --title=${WP_TITLE} --admin_user=${WP_ADMIN_LOGIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL} --allow-root
	wp user create ${WP_USER_LOGIN} ${WP_USER_EMAIL} --user_pass=${WP_USER_PASSWORD} --allow-root;
	# wp theme install inspiro --activate --allow-root
	echo "Done!"
fi

/usr/sbin/php-fpm7.3 -F -R
