<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Getting Started

We used version 5.5.* to develop this project

## Installation

- ```git clone https://github.com/bestmomo/laravel5-example.git projectname```


- ```cd dariloc```


- ```composer install```

- ``` php artisan key:generate ```
- Create a database and inform .env

- ```  php artisan migrate --seed ``` to create and populate tables

- Inform config/mail.php for email sends

- ```  php artisan vendor:publish ``` to publish filemanager

- ```  php artisan serve ``` to start the app on http://localhost:8000/

## Include

- [Bootstrap](https://getbootstrap.com/) for CSS and jQuery plugins
- [Font Awesome](https://fontawesome.com/?from=io) for the nice icons

## Features

- Home page
- Custom Error Page 404
- Authentication (registration, login, logout, password reset, mail confirmation)
- Post management (Add, Eupdate , delete)
- Search in posts
- All post views
- Mail confirmation (stmp)

## Require

- kryptonit3/counter
- laravel/tinker
- laravelcollective/html
- fideloper/proxy


## DataBase

[See database here](https://drive.google.com/open?id=1gBk7b9qFG90E5zAdXLsuhZe4IcdgvDhq)

## Tricks

To test application the database is seeding with users :

- User : email = adam@awity.com, password = 123456


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

