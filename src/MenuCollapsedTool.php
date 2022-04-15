<?php

namespace Stepanenko3\NovaMenuCollapsed;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class MenuCollapsedTool extends Tool
{
    public function boot()
    {
        Nova::provideToScript([
            'novaMenuCollapsed' => config('nova-menu-collapsed.collapsed'),
        ]);

        Nova::script('nova-menu-collapsed', __DIR__ . '/../dist/js/entry.js');
    }

    public function menu(Request $request)
    {
        return null;
    }
}
