#!/bin/bash

while true; do
top -b -n 1 -o %CPU | awk 'NR>7 {if ($9 > 100) print $1, $9}' | while read pid cpu_usage; do
process_name=$(ps -p $pid -o comm=)
echo "Процесс с PID $pid ($process_name) использует $cpu_usage% CPU. Завершаем..."
kill -9 $pid
done
sleep 2
done