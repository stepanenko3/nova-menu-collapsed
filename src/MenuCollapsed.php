<?php

namespace Stepanenko3\NovaMenuCollapsed;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class MenuCollapsed extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::provideToScript([
            'novaMenuCollapsed' => config('nova-menu-collapsed.collapsed'),
        ]);

        Nova::script('nova-menu-collapsed', __DIR__ . '/../dist/js/tool.js');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return null;
    }
}
