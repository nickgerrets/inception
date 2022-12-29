FROM debian:buster

EXPOSE 443

# we need nginx and openssl (for TLS1.3)
RUN apt-get update
RUN apt-get install -y nginx openssl

# copy the default config and the entrypoint script
COPY ./conf/default.conf /etc/nginx/sites-enabled/default
COPY ./tools/entrypoint.sh /var/www

# give execution permissions to the entrypoint script
RUN chmod +x /var/www/entrypoint.sh

# Set the entrypoint so the entrypoint script gets run
ENTRYPOINT [ "var/www/entrypoint.sh" ]

# launch nginx (global directive daemon off to run in foreground, so the container doesn't halt)
CMD ["nginx", "-g", "daemon off;"]
