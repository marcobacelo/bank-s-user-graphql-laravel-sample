#!/bin/bash

docker exec -it api-graphql-app composer install
docker exec -it api-graphql-app php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"
docker exec -it api-graphql-app php artisan migrate
docker exec -it api-graphql-app php artisan db:seed