# Some Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/salfade/laravel-math.svg?style=flat-square)](https://packagist.org/packages/salfade/laravel-math)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/salfade/laravel-math/run-tests?label=tests)](https://github.com/salfade/laravel-math/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/salfade/laravel-math.svg?style=flat-square)](https://packagist.org/packages/salfade/laravel-math)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us
[Buy us Coffee?](http://paypal.me/MohamedFawzan)


## Installation

You can install the package via composer:

```bash
composer require salfade/laravel-math
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Salfade\Math\MathServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Salfade\Math\MathServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$math = new Spatie\Skeleton();
echo $math->echoPhrase('Hello, Spatie!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@salfade.com instead of using the issue tracker.

## Credits

- [Mohamed Fawzan](https://github.com/fawzan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
