# Idle Timeout Alert Demo

This is a demo for [vectorwyse/idle-timeout-alert](https://github.com/vectorwyse/idle-timeout-alert)

## Installation

```sh
composer install

cp.env.example .env
php artisan key:generate
```

Add your database configuration in `.env`

```sh
php artisan migrate
php artisan vendor:publish --provider="Vectorwyse\IdleTimeoutAlert\IdleTimeoutAlertServiceProvider" --tag="vue-components"

npm install && npm run dev
```

Go to `/register` and create a user
Login and view the demo pages

Use network and vue devtools to see what is happening in the background.
