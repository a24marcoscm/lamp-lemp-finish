#!/bin/bash

. ./.env

docker compose -f compose-lamp.yml exec basededatos bash -c "mysqldump -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE" > basededatos/backup-bd.sql
echo "Backup completado: basededatos/backup-bd.sql"

