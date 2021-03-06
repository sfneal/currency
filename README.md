# Currency

[![Packagist PHP support](https://img.shields.io/packagist/php-v/sfneal/currency)](https://packagist.org/packages/sfneal/currency)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfneal/currency.svg?style=flat-square)](https://packagist.org/packages/sfneal/currency)
[![Build Status](https://travis-ci.com/sfneal/currency.svg?branch=master&style=flat-square)](https://travis-ci.com/sfneal/currency)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sfneal/currency/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sfneal/currency/?branch=master)
[![StyleCI](https://github.styleci.io/repos/311416689/shield?branch=master)](https://github.styleci.io/repos/311416689?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/sfneal/currency.svg?style=flat-square)](https://packagist.org/packages/sfneal/currency)

Helper functions for dealing with currency conversions in Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require sfneal/currency
```

## Usage

``` php
use Sfneal\Currency\FormatDollars;
FormatDollars::execute(43.654284, 2, '', true);
>>> $43.65
```

### Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email stephen.neal14@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Neal](https://github.com/sfneal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
