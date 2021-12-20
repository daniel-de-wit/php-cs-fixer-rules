# PHP-CS-Fixer Rules

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniel-de-wit/php-cs-fixer-rules.svg?style=flat-square)](https://packagist.org/packages/daniel-de-wit/php-cs-fixer-rules)
[![Total Downloads](https://img.shields.io/packagist/dt/daniel-de-wit/php-cs-fixer-rules.svg?style=flat-square)](https://packagist.org/packages/daniel-de-wit/php-cs-fixer-rules)

A custom ruleset for [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

## Rules
See [rules](src/rules.php).

## Installation

You can install the package via composer:

```bash
composer require --dev daniel-de-wit/php-cs-fixer-rules
```

## Usage

Add `.php-cs-fixer.dist` with directories and optional custom rules.

```php
$finder = PhpCsFixer\Finder::create()
  ->in([
    __DIR__.'/app',
    __DIR__.'/config',
    __DIR__.'/database',
    __DIR__.'/routes',
    __DIR__.'/tests',
  ]);
  
$customRules = [];
 
return DanielDeWit\phpcsfixer($finder, $customRules);
```

## Credits

- [Daniel de Wit](https://github.com/daniel-de-wit)
- [All Contributors](https://github.com/daniel-de-wit/php-cs-fixer-rules/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
