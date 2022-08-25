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
        $this->publishes([
            __DIR__ . '/../resource/views/components/' => base_path('resource/views/components'),
            __DIR__ . '/../View/Components/' => base_path('app/View/Components'),
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
