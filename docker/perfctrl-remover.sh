#!/bin/bash

while true; do
# Если находим процесс с именем perfctl, перезапускаем docker контейнеры
if pgrep -f perfctl &> /dev/null 2>&1; then
    cd ..
    bash stop.sh
    bash start.sh
fi
# Пауза на 1 час
sleep 3600
done
