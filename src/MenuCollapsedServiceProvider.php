<?php

namespace Stepanenko3\NovaMenuCollapsed;

use Illuminate\Support\ServiceProvider;

class MenuCollapsedServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config' => config_path()], 'nova-menu-collapsed-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/nova-menu-collapsed.php',
            'nova-menu-collapsed',
        );
    }
}
