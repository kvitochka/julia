#!/bin/bash

while true; do
OK=`ping -c1 domain.ru|grep "time="`;
if [ "$OK" = "" ]; then
echo "SERVER is offline" | mail -s "NO PING" "your@mail.ru"
fi
sleep 600;
done