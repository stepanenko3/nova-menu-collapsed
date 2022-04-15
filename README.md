# Nova Menu Collapsed

This tool gives you the ability to set the default collapse state for Nova 4.0 menu items.

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Installation and Setup

### Installing the package

Install the package in a Laravel Nova project via Composer and edit the configuration file

```bash
# Install the package
composer require stepanenko3/nova-menu-collapsed

# Publish the configuration file and edit it to your preference
# NB! If you want custom table names, configure them before running the migrations.
php artisan vendor:publish --tag=nova-menu-builder-config
```

Register the tool with Nova in the `tools()` method of the `NovaServiceProvider`:

```php
// in app/Providers/NovaServiceProvider.php

public function tools()
{
    return [
        // ...
        new \Stepanenko3\NovaMenuCollapsed\MenuCollapsedTool,
    ];
}
```

### Setting up

After publishing the configuration file, you have to make some required changes in the config:

```php
'collapsed' => true,
```

## Credits

- [Artem Stepanenko](https://github.com/stepanenko3)

## License

Nova Menu Builder is open-sourced software licensed under the [MIT license](LICENSE.md).