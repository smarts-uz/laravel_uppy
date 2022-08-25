<?php

namespace Teamprodev\Uppy\Providers;

use Illuminate\Support\ServiceProvider;

class UppyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'uppy');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/Teamprodev/uppy'),
            __DIR__ . '/../resources/assets' => base_path('public/assets'),
            __DIR__.'/../config/config.php' => config_path('uppy.php'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
