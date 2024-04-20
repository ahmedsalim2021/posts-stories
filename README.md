

## System requirements

- php 8.0 or higher
- apache or inigx
- php-xml, php-mbstring, php-common, php-curl (php extensions)


## Installation

- git clone
- composer install
- create .env file and copy content of .env.example
- add db credentials in .env file
- run php artisan key:generate
- run php artisan migrate --seed to create db schema and add seeders
- run php artisan serve to run project

### Documentation

Postman API docs: https://documenter.getpostman.com/view/3446458/2sA3BoarTd
ERD provided in project files as a image png


