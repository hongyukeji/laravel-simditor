<?php

namespace Hongyukeji\LaravelSimditor;

use Illuminate\Support\ServiceProvider;

class SimditorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Simditor');

        $this->publishes([
            realpath(__DIR__ . '/resources/views') => base_path('resources/views/vendor/simditor'),
        ], 'view');

        $this->publishes([
            realpath(__DIR__ . '/resources/assets/simditor') => public_path('vendor/simditor'),
        ], 'assets');
    }

    public function register()
    {
        //
    }
}