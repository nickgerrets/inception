#!/bin/bash

# Make sure we have the correct ssl certificate
if [ ! -f /etc/ssl/certs/nginx.crt ]
then
	openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=NL/ST=Amsterdam/L=Amsterdam/O=wordpress/CN=ngerrets.42.fr";
fi

echo "nginx container running"

# required to make sure nginx keeps running
exec "$@"
