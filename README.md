# Laravel Database Helpers

## Installation

You can install the package via composer:

```bash
composer require takuya829/laravel-db-helpers
```

## Usage

### escape_like_query
```php
$escaped = escape_like_query('test%');
echo $escaped; // test\%
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Takuya Ohashi](https://github.com/takuya829)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
