#!/bin/sh

minikube addons enable metallb
cd srcs
kubectl apply -f configmap.yaml
docker build -t ftps FTPS
docker build -t grafana Grafana
docker build -t influxdb InfluxDB
docker build -t mysql MySQL
docker build -t nginx Nginx
docker build -t phpmyadmin PhpMyAdmin
docker build -t telegraf Telegraf
docker build -t wordpress Wordpress
kubectl apply -f FTPS/ftps.yaml
kubectl apply -f Grafana/grafana.yaml
kubectl apply -f InfluxDB/influxdb.yaml
kubectl apply -f MySQL/mysql.yaml
kubectl apply -f Nginx/nginx.yaml
kubectl apply -f PhpMyAdmin/phpmyadmin.yaml
kubectl apply -f Telegraf/telegraf.yaml
kubectl apply -f Wordpress/wordpress.yaml