# Simple CRUD using Laravel

[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)
[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/Naereen/StrapDown.js/blob/master/LICENSE)

Welcome to my second repo about CRUD implementation and in this repo instead of using pure PHP, I use one of PHP framework which is [Laravel](https://laravel.com/).

## Features

Basic CRUD (Create, Read, Update, Delete) nothing special (yet & again).

## Motivation

It's just practice make perfect repository.

## Prerequisite

To run this code you need:

-   [Laravel](https://laravel.com/)
-   [Composer](https://getcomposer.org/)
-   [XAMPP](https://www.apachefriends.org/download.html)

You can also use [Docker](https://www.docker.com/) to run this code if you wish but in this repo I am using the Composer way.

## Installation or Getting Started

1. Make sure you have already have all of the prerequisite!

2. Download or clone the repository

> git clone https://github.com/mhnaufal/laravel-crud.git

...or simply download the zip and extract it

3. Open the folder in code editor of your choice and also open up a terminal

4. In the terminal, move to the cloned folder

> cd laravel-crud

5. Install project dependencies

> composer install

6. Copy .env.example file into .env

> cp .env.example .env

7. Generate encryption key

> php artisan key:generate

8. Run server and database in XAMPP

9. Create a new database called **securities**

10. Configure .env file by replace the proper line into these one:

> DB_DATABASE=securities

11. Add the tables into the database

> php artisan migrate

12. Run the server

> php artisan serve

Below is how to use the seed

1. Open up terminal

2. Run the seed

> php artisan db:seed

Enjoy :grin:

## To Do

-   Add description for the data in show route (detail)
-   Authorization for admin and login page
-   Using more API on the list
-   Designing the frontend
-   Purchase features
-   Search features
-   .
-   .
-   .
-   Deploy?

## Disclaimer

There is an [Ethereum](https://ethereum.org/en/) image and icon that I am using in this code and I am using it only for learning materials and there is no intention of taking copyright.

Feel free to ask me anything, Thanks! :smile:
