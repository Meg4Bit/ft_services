FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add mysql mysql-client

COPY srcs/my.cnf /etc/
COPY srcs/start.sh /var/
COPY srcs/wordpress.sql /var/

# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh
