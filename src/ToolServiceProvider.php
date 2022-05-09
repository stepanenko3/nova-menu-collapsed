<?php

namespace Stepanenko3\NovaMenuCollapsed;

use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config' => config_path()], 'nova-menu-collapsed-config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/nova-menu-collapsed.php',
            'nova-menu-collapsed',
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
