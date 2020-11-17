FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add openssl vsftpd

COPY srcs/start.sh /var/
COPY srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN openssl req -x509 -batch -new -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/vsftpd.key -subj '/C=RU/ST=Moscow/L=Moscow/O=21 school/CN=ametapod' -out /etc/ssl/certs/vsftpd.csr

# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 20 21 30000