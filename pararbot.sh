#!/bin/bash
echo "O bot SMS ROBOT foi Desligado!!!"
echo "==============================="

pm2 stop ./inicia_pagamentos.sh
pm2 stop ./inicia_processos.sh
pm2 stop ./inicia_alertas.sh
pm2 stop ./inicia_bot.sh
