FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add nginx php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json supervisor

RUN mkdir /run/nginx
WORKDIR /var/www

COPY srcs/start.sh /var/
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/wordpress-5.5.3.tar.gz .
COPY srcs/supervisor.conf /etc/supervisord.conf
RUN tar xzvf ./wordpress-5.5.3.tar.gz && rm -rf wordpress-5.5.3.tar.gz
COPY srcs/wp-config.php wordpress

RUN adduser -D -g 'www' www
RUN chown -R www:www /var/www
RUN chown -R www:www /var/lib/nginx
RUN chmod 777 -R wordpress

# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 5050