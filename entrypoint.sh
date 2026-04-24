#!/bin/bash

# Espera que itop genere el archivo y luego lo pone en solo lectura
CONFIG_FILE="/var/www/html/conf/production/config-itop.php"

if [ -f "$CONFIG_FILE" ]; then
    chmod 444 "$CONFIG_FILE"
fi

# Inicia Apache normalmente
apache2-foreground