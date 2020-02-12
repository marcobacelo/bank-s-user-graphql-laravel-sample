# Bank's user #

## Objectives ##

###### Apply some knowledge about GraphQl on a Laravel project

## Setting Up Environment ##

### Development ###

#### Download and install docker-ce ####
* Linux: https://www.digitalocean.com/community/tutorials/como-instalar-e-usar-o-docker-no-ubuntu-16-04-pt

#### Download and install docker-compose ####
https://docs.docker.com/compose/install/#install-compose

#### Composing up! ####
In your application directory, run:

```
docker-compose up -d
```

### Setting database migrations ###

Run the comand below and type 'yes' for all:

```
sh run.sh
```

#### Composing down :( ####

To shut down the application, enter your application directory and run:

```
docker-compose down
```

## API's URL ##

#### For some reasons, I haven't fully developed the API ####

```
http://localhost:32900/graphiql
```

#### Mutation example ####

```
{
  transactions {
    balance
  }
}
```
