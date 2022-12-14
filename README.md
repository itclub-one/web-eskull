
# How to setup Laravel

```bash
cp .env.example .env
```

```bash
composer install
```

```bash
php artisan key:generate
php artisan migrate
```

```bash
# Optional
php artisan db:seed
```

## Deploy on production

- make `.env`
- set database username, password, database name
- don't use root user
- set `.env`

```dotenv
APP_DEBUG=false

DB_HOST=db

REDIS_CLIENT=predis
REDIS_HOST=redis
REDIS_PASSWORD=null

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
```

```bash

docker-compose build app
docker-compose up -d

docker-compose exec app composer install --optimize-autoloader --no-dev

docker-compose exec app php artisan route:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear

docker-compose exec app php artisan route:cache
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan view:cache
docker-compose exec app php artisan optimize
```

- `docker-compose exec app php artisan migrate` if no database file
- `docker-compose exec app php artisan db:seed` seeder
