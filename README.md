
# Automated Sitemaps

This package registers a simple command which uses [spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap) to generate a sitemap for your website.

## Installation
The first thing to do is require the package using composer

    composer require "projectrebel/automated-sitemap"

Once the package has been installed, you can publish the config for `spatie/laravel-sitemap` if you need more advanced configuration.

    php artisan sitemap:install


## Usage

Add the newly registered command to your task schedule in `Console/Kernel.php`:

    $schedule->command('sitemap:generate')->daily();

The command will create `sitemap.xml` and place it at your `public_path()`. You can also use `php artisan sitemap:generate` whenever you would like to update the sitemap outside of the scheduled task.

It is recommended to follow [Google's guidelines](https://support.google.com/webmasters/answer/183668?hl=en) for submitting and updating your website's sitemap.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.