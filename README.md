# PHP-CS-Fixer Config
![License](https://poser.pugx.org/pedrotroller/php-cs-custom-fixer/license) ![php-version](https://img.shields.io/packagist/php-v/h1r0-2525/php-cs-fixer-config) ![Version](https://img.shields.io/packagist/v/h1r0-2525/php-cs-fixer-config) [![CircleCI](https://circleci.com/gh/h1r0-2525/php-cs-fixer-config.svg?style=shield)](https://circleci.com/gh/h1r0-2525/php-cs-fixer-config)

## Installation
```
$ composer require --dev h1r0-2525/php-cs-fixer-config
```

## Configuration
```php
// .php_cs.dist
<?php

use H1r0\CS\Config\Rule;
use H1r0\CS\Finder\Finder;

return Rule::create()
    ->setFinder(Finder::create()->in(__DIR__));
```

## Overwrite rules and finder
```php
// .php_cs.dist
<?php

use H1r0\CS\Config\Rule;
use H1r0\CS\Finder\Finder;

return Rule::create([
        // add your rules
        'combine_consecutive_unsets' => false,
    ])
    ->setFinder(Finder::create()
        ->exclude([
            // add exclude path
            'vender',
        ])
        ->in(__DIR__)
    );
```

# Contributions
Before submitting a pull request, you must run test.

## Run test
```
$ composer test tests/
```
