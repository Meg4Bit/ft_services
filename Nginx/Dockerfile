FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add nginx openssl openssh supervisor

WORKDIR /var/lib/nginx

RUN mkdir /run/nginx/
COPY srcs/start.sh /var/
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/supervisor.conf /etc/supervisord.conf

RUN openssl req -x509 -batch -new -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/localhost.key -subj '/C=RU/ST=Moscow/L=Moscow/O=21 school/CN=localhost.com' -out /etc/ssl/certs/localhost.csr
RUN adduser -D -g 'www' www
RUN chown -R www:www *

# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 80 443 22
