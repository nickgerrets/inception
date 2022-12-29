FROM debian:buster

# install mariadb
RUN apt-get update
RUN apt-get install -y mariadb-server

EXPOSE 3306

# copy config files and entrypoint script
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

# run mysql service and run entrypoint query
RUN service mysql start && mysql < /var/www/entrypoint_query.sql;

# start a mysql daemon
CMD ["mysqld"]