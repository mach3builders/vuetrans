<?php

namespace Mach3builders\Vuetrans;

use Illuminate\Support\ServiceProvider;

class VuetransServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing config
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('vuetrans.php'),
        ], 'config');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => resource_path('js/vendor/vuetrans'),
        ], 'assets');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'vuetrans');
    }
}
