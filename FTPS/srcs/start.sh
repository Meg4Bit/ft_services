#!/bin/sh

adduser --disabled-password ${USER}
echo "${USER}:${USER_PASSWORD}" | chpasswd
mkdir /home/$USER/ftp
chown nobody:nogroup /home/ftpsuser/ftp
mkdir /home/ftpsuser/ftp/files
chmod -R 777 /home/ftpsuser/ftp
chown ftpsuser:ftpsuser /home/ftpsuser/ftp/files
vsftpd /etc/vsftpd/vsftpd.conf