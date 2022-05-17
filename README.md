# Nova Menu Collapsed

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stepanenko3/nova-menu-collapsed.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/nova-menu-collapsed)
[![Total Downloads](https://img.shields.io/packagist/dt/stepanenko3/nova-menu-collapsed.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/nova-menu-collapsed)
[![License](https://poser.pugx.org/stepanenko3/nova-menu-collapsed/license)](https://packagist.org/packages/stepanenko3/nova-menu-collapsed)

This tool gives you the ability to set the default collapse state for Nova 4.0 menu items.

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Installation

Install the package in a Laravel Nova project via Composer and edit the configuration file

```bash
# Install the package
composer require stepanenko3/nova-menu-collapsed

# Publish the configuration file and edit it to your preference
php artisan vendor:publish --provider="Stepanenko3\NovaMenuCollapsed\ToolServiceProvider" --tag="config"
```

Register the tool with Nova in the `tools()` method of the `NovaServiceProvider`:

```php
// in app/Providers/NovaServiceProvider.php

public function tools()
{
    return [
        // ...
        new \Stepanenko3\NovaMenuCollapsed\MenuCollapsed,
    ];
}
```

### Setting up

After publishing the configuration file, you have to make some required changes in `config/nova-menu-collapsed.php`:

```php
'collapsed' => true,
```

## Credits

- [Artem Stepanenko](https://github.com/stepanenko3)

## License

Nova Menu Builder is open-sourced software licensed under the [MIT license](LICENSE.md).
