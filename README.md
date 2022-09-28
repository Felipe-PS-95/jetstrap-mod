# Jetstrap

[![Latest Stable Version](https://poser.pugx.org/nascent-africa/jetstrap/v)](//packagist.org/packages/nascent-africa/jetstrap)
[![Total Downloads](https://poser.pugx.org/nascent-africa/jetstrap/downloads)](//packagist.org/packages/nascent-africa/jetstrap)
[![License](https://poser.pugx.org/nascent-africa/jetstrap/license)](//packagist.org/packages/nascent-africa/jetstrap)

  
## Description

Jetstrap is a lightweight laravel 9 package that focuses on the `VIEW` side of [Jetstream](https://github.com/laravel/jetstream) / [Breeze](https://github.com/laravel/breeze) package installed in your Laravel application, so when a swap is performed, the `Action`, `MODEL`, `CONTROLLER`, `Component` and `Action` classes of your project is still 100% handled by Laravel development team with no added layer of complexity.

Notes: 
- I only tested Jetstream.
- Have the PHP version installed and install Composer in it after installing it.
After that uncomment the "fileinfo" line in php.ini

* See Laravel version: php artisan --version
* See PHP version: php -v

Project Configuration:
Laravel Framework 9.24.0
PHP 8.1.9

Reference Link: https://www.youtube.com/watch?v=nuB09o8SMUc&t=1s (by Tech Chess)

## Table of Content
  * [Installation](#installation)
    + [Install Laravel (If Necessary)](#install-laravel-if-necessary)
    + [Project Creation](#project-creation)
    + [Update Composer (If Necessary)](#update-composer-if-necessary)
    + [Installing Jetstream](#installing-jetstream)
      - [Install Jetstream With Livewire](#install-jetstream-with-livewire)
      - [Or, Install Jetstream With Inertia](#or--install-jetstream-with-inertia)
    + [Install Jetstrap](#install-jetstrap)
    + [Install Sass](#install-sass)
    + [Finalizing The Installation](#finalizing-the-installation)
    + [Extras](#extras)
      - [Pagination](#pagination)
  * [Presets](#presets)
    + [Core Ui](#core-ui)
    + [AdminLTE](#adminlte)
  * [Breeze](#breeze)
    + [Swapping Breeze resources](#swapping-breeze-resources)
    + [Swapping Breeze inertia resources](#swapping-breeze-inertia-resources)
  * [Testing](#testing)
  * [License](#license)
  
  
## Installation

### Install Laravel (If Necessary)
composer global require laravel/installer

### Project Creation
```
laravel new laravel-jetstream-bootstrap --jet
```
- Select option 0 (liveware)
- no (for creating teams)

### Update Composer (If Necessary)
```
composer global update
composer global update -w
```
- Create database in this case "my_test" and change it to ".env"
- Open created project "cd laravel-jetstream-bootstrap" in terminal

### Installing Jetstream

You may use Composer to install Jetstream into your new Laravel project:

```
composer require laravel/jetstream
```

If you choose to install Jetstream through Composer, you should run the jetstream:install Artisan command. This command accepts the name of the stack you prefer (livewire or inertia). You are highly encouraged to read through the entire documentation of Livewire or Inertia before beginning your Jetstream project. In addition, you may use the --teams switch to enable team support:

#### Install Jetstream With Livewire

```
php artisan jetstream:install livewire --teams (Not tested)
```

#### Or, Install Jetstream With Inertia

```
php artisan jetstream:install inertia --teams (Not tested)
```

### Install Jetstrap

Use Composer to install Jetstrap into your new Laravel project as dev dependency:

```
composer require felipe-ps/jetstrap
```

Regardless how you install Jetstream, Jetstrap commands are very similar to that
of Jetstream as it accepts the name of the stack you would like to swap (livewire or inertia).

> It is important you install and configure [Laravel Jetstream](https://github.com/laravel/jetstream) before performing a swap.

You are highly encouraged to read through the entire documentation of [Jetstream](https://jetstream.laravel.com/1.x/introduction.html)
before beginning your Jetstrap project. In addition, you may use the `--teams` switch to swap team assets just like you would in Jetstream:

```bash

php artisan jetstrap:swap livewire

or

php artisan jetstrap:swap livewire --teams (Not tested)

php artisan jetstrap:swap inertia --team (Not tested)
```

This will publish overrides to enable Bootstrap like the good old days!

### Install Sass
```
npm i -D sass
```

### Finalizing The Installation

After installing Jetstrap and swapping Jetstream resources, remove tailwindCSS and its dependencies if any from your package.json and then install and build your NPM dependencies and migrate your database:

```
npm install && npm run build

php artisan migrate

php artisan serve
```


### Extras

#### Pagination (Not tested)

It is also important to point out that Laravel 8 still includes pagination views built using Bootstrap CSS. To use these views instead of the default Tailwind views, you may call the paginator's useBootstrap method within your AppServiceProvider:

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
```


## Presets (Not tested)

Presets are custom third party templates built using bootstrap. We've thought about it, what are the chances that you're going to use the default template provided by Laravel or Laravel Jetstream.

With the assumption you already know which way you want to go before running any type of scaffolding, so if you want to use CoreUi or AdminLte presets then the choice should be specified in your service provider (`JetstrapFacade::useCoreUi3()` or `JetstrapFacade::useAdminLte3()`) the first time you run any `swap` command.

And if you change your mind after you've run a swap command and decide to use a preset, then run the `jetstrap:swap` command again.


### Core Ui (Not tested)

[Core Ui](https://coreui.io/) lets you save thousands of priceless hours because it offers everything you need to create modern, beautiful, and responsive applications as stated on their website.

> Please visit the CoreUI [documentation](https://coreui.io/docs/getting-started/introduction/) for more details on how to use it.

To use Core Ui presets, simply call the `useCoreUi3` method within your AppServiceProvider:

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JetstrapFacade::useCoreUi3();
    }
}
```

### AdminLTE (Not tested)

[AdminLTE](https://adminlte.io/) is an open source admin dashboard & control panel theme. Built on top of Bootstrap, AdminLTE provides a range of responsive, reusable, and commonly used components.

> Please visit the AdminLTE [documentation](https://adminlte.io/themes/v3/) for more details on how to use it.

To use AdminLte presets, simply call the `useAdminLte3` method within your AppServiceProvider:

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JetstrapFacade::useAdminLte3();
    }
}
```


## Breeze (Not tested)

> **Warning!!!**: Jetstrap resources has been updated to work with the current version of Breeze but does not support swap for inertia-react resources. Feel free to make a PR with this feature if you can.

According to the documentation, "Breeze provides a minimal and simple starting point for building a Laravel application with authentication.", but personally I'd like to think of it as Laravel Ui without Vue and Bootstrap.
Recently I worked on a project that didn't use Vue or require a complex authentication system, so Breeze seemed like a good idea, but again I was faced with the TailwindCSS problem, so I figured why not include it to the Jetstrap package.

> Before proceeding please familiarize yourself with the Breeze via the official documentation [documentation](https://github.com/laravel/breeze/blob/1.x/README.md).

Again Jetstrap does not affect the Model / Controller portion of Breeze, just the View.

### Swapping Breeze resources

To swap tailwind resource for bootstrap in a breeze configured laravel, simply run:

```bash

php artisan jetstrap:swap breeze
```

### Swapping Breeze inertia resources

Laravel Breeze now comes with stubs for inertia scaffolding and so dose Jetstrap. To use a Bootstrap scaffold for your laravel project running on Breeze alongside inertia, simply run the code below:

```bash

php artisan jetstrap:swap breeze-inertia
```

Next you have to clean up your `package.json` file to make sure we don't install unnecessary packages.

After that run:

```
npm install && npm run dev
```

...and you're done!

Using the `JetstrapFacade::useCoreUi3()` or `JetstrapFacade::useAdminLte3();` in your service provider while swapping breeze assets will work as expected.


## Testing

Run the tests with:

```bash
vendor/bin/phpunit
```

or 

```bash
composer tests
```


## License
Jetstrap is open-sourced software licensed under the [MIT license](https://github.com/nascent-africa/jetstrap/blob/master/LICENSE).
