# Event Calendar

<http://localhost/phpmyadmin/>
                              , new, laravel_008_event_calendar, create
<https://github.com/maddhatter/laravel-fullcalendar>

```shell
composer create-project --prefer-dist laravel/laravel event-calendar 5.8
cd event_calendar
composer require maddhatter/laravel-fullcalendar
php artisan make:migration create_events_table
php artisan make:model Event
php artisan make:controller EventController --resource
```

```shell
.env

APP_URL=http://localhost:8000
DB_DATABASE=laravel_008_event_calendar
DB_USERNAME=root
DB_PASSWORD=root
```

```shell
php artisan migrate
php artisan serve
```

<http://127.0.0.1:8000/>
<http://127.0.0.1:8000/events>, add events, add event data
<http://127.0.0.1:8000/addeventurl>, add event data

---
