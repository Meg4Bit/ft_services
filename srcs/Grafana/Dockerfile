FROM alpine:latest
LABEL maintainer="ametapod"
# Устанавливаем зависимости

RUN apk update
RUN apk add wget libc6-compat

RUN mkdir /tmp/grafana
RUN wget -P /tmp/ https://dl.grafana.com/oss/release/grafana-7.0.0.linux-amd64.tar.gz
RUN tar -C /tmp/grafana -xzf /tmp/grafana-7.0.0.linux-amd64.tar.gz && rm -rf /tmp/grafana-7.0.0.linux-amd64.tar.gz

WORKDIR /tmp/grafana/grafana-7.0.0/
COPY srcs/start.sh /var/
ADD srcs/dashboards ./public/dashboards
# Настраиваем команду, которая должна быть запущена в контейнере во время его выполнения
ENTRYPOINT sh /var/start.sh

# Открываем порты
EXPOSE 3000