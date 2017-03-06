<?php

namespace Satouch\LaravelMenu;

use Illuminate\Support\ServiceProvider;

class LaravelMenuServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        # Load Views
        $this->loadViewsFrom(__DIR__.'/views', 'satouchmenu');

        # Publish Views
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/satouch/laravelmenu'),
        ]);

        # Publish Migrations
        $this->publishes([
            __DIR__ . '/migrations/2017_03_06_052144_create_routes_table.php' => base_path('database/migrations/2017_03_06_052144_create_routes_table.php'),
            __DIR__ . '/migrations/2017_03_06_052452_create_menus_table.php' => base_path('database/migrations/2017_03_06_052452_create_menus_table.php')
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}