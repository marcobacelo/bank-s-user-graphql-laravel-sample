#!/bin/bash

docker exec -it api-graphql-app php artisan migrate
docker exec -it api-graphql-app php artisan db:seed