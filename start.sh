#!/bin/bash
WHITE='\033[0;37m'
BOLD_WHITE='\033[1;37m'
BOLD_GREEN='\033[1;32m'
BOLD_YELLOW='\033[1;33m'

DOMAIN_IP_ADDRESS="$(ip route get 8.8.8.8 | awk -F"src " 'NR==1{split($2,a," ");print a[1]}')"

# Выключаем текущие контейнеры
cd docker
docker compose down

# Качаем composer
sudo apt -y install composer
cd ..
cd src
export COMPOSER_ALLOW_SUPERUSER=1; composer show;
composer install --ignore-platform-req=ext-simplexml --no-interaction
cd ..
cd docker

# Запускаем контейнеры
docker compose up -d --build

## Адреса веб-интерфейсов
echo -e "\nАдрес WEB-Интерфейса: ${WHITE}http://${DOMAIN_IP_ADDRESS}:8080/"