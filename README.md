### Laravel + Nginx + Mysql in docker template

- Laravel latest version
- PHP FPM 8.2
- Nginx latest
- Mysql latest

### Get this template
```shell
git clone https://github.com/zodigancode/docker-laravel.git docker-laravel
```

```shell
cd docker-laravel
docker compose up -d
```

You need to run the following commands from the console of the laravel_php container. To start bash within docker container, use the command:

```shell
docker exec -it laravel_php sh
```

Run laravel installation with container console:

```shell
composer create-project laravel/laravel
```

Change `host` from `localhost` to `mysql`, dbname, username and password set to `laravel` in .env file
