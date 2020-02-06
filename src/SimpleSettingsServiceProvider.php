<?php

namespace Fladko\SimpleSettings;

use Illuminate\Support\ServiceProvider;

class SimpleSettingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
        //
    }
}
