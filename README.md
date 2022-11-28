# Queue Fibonacci

## 🚀 Technologies
- [Laravel](https://laravel.com)
- [Docker](https://www.docker.com)
- [Insomnia](https://insomnia.rest)

## ❓ How to use

### How to install
```bash
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```


## ✅ How to test the application
```bash
docker-compose exec app php artisan test
```

## ✨ Possible improvements
- Check if returns are as expected;
- Configure Docker to run the queue in the background;
- Implement functionality tests;
