## Steps for run application locally

1. Environment 
```
    cp .env.example .env
```


2. Install dependencies 
```
    composer install 
```

3. Run migration and seeder 
```
    php artisan migrate --seed
```

4. Run local development http server 
```
    php artisan serve
```
