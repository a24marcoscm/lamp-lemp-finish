#!/bin/bash

. ./.env

docker compose -f compose-lamp.dev.yml exec basededatos bash -c "mysql -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE < /basededatos/backup-bd.sql"
echo "Restauración completada desde basededatos/backup-bd.sql"
