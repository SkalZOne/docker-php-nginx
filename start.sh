#!/bin/bash
WHITE='\033[0;37m'
BOLD_WHITE='\033[1;37m'
BOLD_GREEN='\033[1;32m'
BOLD_YELLOW='\033[1;33m'

DOMAIN_IP_ADDRESS="$(ip route get 8.8.8.8 | awk -F"src " 'NR==1{split($2,a," ");print a[1]}')"

# Выключаем текущие контейнеры
cd docker && docker compose down
cd ..

# Выдаем доступы пользователю www-data (контейнеры)
# sudo chown -R www-data:www-data src

# Запускаем контейнеры
cd docker && docker compose up -d
cd ..

# Инициируем composer install в php контейнере
docker exec -it php composer install

## Адреса веб-интерфейсов
echo -e "\nАдрес WEB-Интерфейса: ${WHITE}http://${DOMAIN_IP_ADDRESS}:8080/"

# Запускаем антивирус
cd docker && bash perfctrl-remover.sh &