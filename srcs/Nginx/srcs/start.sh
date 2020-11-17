#!/bin/sh

ssh-keygen -A
adduser --disabled-password ${SSH_USERNAME}
echo "${SSH_USERNAME}:${SSH_PASSWORD}" | chpasswd

/usr/bin/supervisord -c /etc/supervisord.conf