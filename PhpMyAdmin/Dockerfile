FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add nginx php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session supervisor wget

RUN mkdir /run/nginx
WORKDIR /var/www

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages phpmyadmin
COPY srcs/start.sh /var/
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/config.inc.php phpmyadmin
COPY srcs/supervisor.conf /etc/supervisord.conf

RUN adduser -D -g 'www' www
RUN chown -R www:www /var/www
RUN chown -R www:www /var/lib/nginx

# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 5000