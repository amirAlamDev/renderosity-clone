# Renderosity Clone

## Installation

First clone this repository, install the dependencies, and setup the .env file.

```
git clone git@github.com:amirAlamDev/renderosity-clone.git renderosity-clone
composer install
cp .env.example .env
php artisan key:generate
```

Then create the necessary database.

```
php artisan db
create database laravel_shop
```

And run the initial migrations.

```
php artisan migrate
```

Set up Stripe credentials (`STRIPE_KEY` and `STRIPE_SECRET`) and BrainTree credentials (`BT_MERCHANT_ID`, `BT_PUBLIC_KEY`, and `BT_PRIVATE_KEY`) in the `.env` file.

Finally, run `npm install` and `npm run dev`.

## Images

![renderosity-clone_home](https://i.imgur.com/Sco9WGm.png)

![renderosity-clone_marketplace](https://i.imgur.com/hn2P4uS.png)

![renderosity-clone_checkout](https://i.imgur.com/o9ZHeNt.png)
