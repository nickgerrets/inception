FROM debian:buster

# mysqli is required by Wordpress, fpm is FastCGI required by subject, wget is required to download Wordpress
RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget

EXPOSE 9000

# copy configs
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./conf/wp-config.php /tmp/
COPY ./tools /var/www/

# proper rights
RUN chmod +x /var/www/entrypoint.sh

ENTRYPOINT [ "/var/www/entrypoint.sh" ]
