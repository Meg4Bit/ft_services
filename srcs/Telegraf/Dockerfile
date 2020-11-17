FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add wget libc6-compat

RUN mkdir /tmp/telegraf
RUN mkdir /etc/telegraf
RUN wget -P /tmp/telegraf/ https://dl.influxdata.com/telegraf/releases/telegraf-1.16.2_linux_amd64.tar.gz
RUN tar -C /tmp/telegraf -xzf /tmp/telegraf/telegraf-1.16.2_linux_amd64.tar.gz && rm -rf /tmp/telegraf/telegraf-1.16.2_linux_amd64.tar.gz
RUN cp -R /tmp/telegraf/telegraf-1.16.2 /usr/bin/ && rm -rf /tmp/telegraf/

WORKDIR /usr/bin/telegraf-1.16.2/usr/bin
COPY srcs/start.sh /var/
COPY srcs/telegraf.conf /etc/telegraf/telegraf.conf
# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 8125