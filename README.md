# Laravel OPCache

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vursion/laravel-opcache.svg?style=flat-square)](https://packagist.org/packages/vursion/laravel-opcache)
[![Total Downloads](https://img.shields.io/packagist/dt/vursion/laravel-opcache.svg?style=flat-square)](https://packagist.org/packages/vursion/laravel-opcache)

## Installation

You can install the package via composer:

```bash
composer require vursion/laravel-opcache
```

***No need to register the service provider if you're using Laravel >= 5.5.
The package will automatically register itself.***
Once the package is installed, you can register the service provider in `config/app.php` in the providers array:

```php
'providers' => [
	...
	Vursion\LaravelOPCache\OPCacheServiceProvider::class
],
```

## Usage

Clear/Reset OPCache

```bash
php artisan opcache:reset
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email support@vursion.io instead of using the issue tracker.

## Credits

- [Jochen Sengier](https://github.com/celcius-jochen)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
