#!/bin/bash
echo "O bot SMS ROBOT foi iniciado!!!"
echo "==============================="

pm2 start ./inicia_pagamentos.sh
pm2 start ./inicia_processos.sh
pm2 start ./inicia_alertas.sh
pm2 start ./inicia_bot.sh