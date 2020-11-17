#!/bin/sh

if [ ! -f /tmp/wordpress.sql ]; then
	mv /var/wordpress.sql /tmp/
	mysql -h mysql -u mysql -ppassword wordpress < /tmp/wordpress.sql
fi

/usr/bin/supervisord -c /etc/supervisord.conf