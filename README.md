
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
DB_HOST=db

REDIS_CLIENT=predis
REDIS_HOST=redis
REDIS_PASSWORD=null

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
```

- `docker-compose build app`
- `docker-compose up -d`
- `docker-compose exec app php artisan db:seed` seeder
