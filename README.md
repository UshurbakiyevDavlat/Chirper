<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Chirper - Microblogging Platform
## Overview
Chirper is a microblogging platform built with Laravel. It allows users to share short messages called "chirps" with each other, follow other users, and explore popular chirps.

## Prerequisites
- Docker (Docker Desktop for Windows or Docker for Mac)
- Docker Compose

## Installation
1) Clone the repository: git clone
2) Copy the .env.example file to .env:
``cp .env.example .env``
3) Install dependencies: ``./vendor/bin/sail composer install``
4) Start the development server: ``./vendor/bin/sail up``
5) Generate a new application key: ``./vendor/bin/sail artisan key:generate``
6) Migrate the database: ``./vendor/bin/sail artisan migrate``
7) (Optional) Seed the database with test data: ``./vendor/bin/sail artisan db:seed``
8) Open your browser and visit http://localhost to access the Chirper application.

## Usage
- Run server ``./vendor/bin/sail up -d ``
- Down server ``./vendor/bin/sail down ``
- Test `` ./vendor/bin/sail test ``

## Features
- User registration and login
- User profiles and avatars
- Posting, editing, and deleting chirps
- Liking and commenting on chirps
- Following and unfollowing other users
- Viewing popular chirps based on like count

## Dependencies
~~~
- PHP 8.1
- Laravel 10.8
- Guzzle HTTP Client 7.2
- Laravel Sanctum 3.2
- Laravel Tinker 2.8
- Laravel sail 1.18
~~~
## Development
The develop branch is the primary development branch for the Chirper project. When submitting pull requests, please target the develop branch.

## Contributing
Contributions to the Chirper project are welcome! Please submit pull requests or open issues for any bugs or feature requests you have.

## License
Chirper is open-source software licensed under the MIT license.
