#!/bin/bash

cd "$(dirname "$0")"

docker-compose --env-file ./.env \
  -f ./docker-compose.yml \
  down