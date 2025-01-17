#!/bin/sh

mysql_install_db --user=mysql --datadir=/var/lib/mysql

:> /tmp/sql

echo "CREATE DATABASE IF NOT EXISTS wordpress CHARACTER SET utf8 COLLATE utf8_general_ci;" >> /tmp/sql
echo "SET PASSWORD FOR '$MYSQL_USER'@'localhost'=PASSWORD('${MYSQL_PASSWORD}');" >> /tmp/sql
echo "GRANT ALL ON *.* TO '$MYSQL_USER'@'127.0.0.1' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION;" >> /tmp/sql
echo "GRANT ALL ON *.* TO '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION;" >> /tmp/sql
echo "GRANT ALL ON *.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION;" >> /tmp/sql
echo "FLUSH PRIVILEGES;" >> /tmp/sql

/usr/bin/mysqld --console --init_file=/tmp/sql