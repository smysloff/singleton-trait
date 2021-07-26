# Singleton Trait

PHP Singleton Trait to use in different classes.

## Creation

```php
use \Smysloff\Traits\Singleton;

require "vendor/autoload.php";

class Example
{
    // You need to use the trait here
    use Singleton;

    // Put your code below
}
```

## Usage

```php
$example = Example::getInstance();
```

## Installation

```bash
composer require "smysloff/singleton-trait"
```

## References

* https://en.wikipedia.org/wiki/Singleton_pattern