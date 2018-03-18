<?php

namespace RenderbitTechnologies\LightBootstrapDashboard;

use Illuminate\Support\ServiceProvider;

class LightBootstrapDashboardServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/config/lbd.php' => config_path('lbd.php'),
            __DIR__.'/config/sidebar-menu.php' => config_path('sidebar-menu.php'),
        ], 'config');

        // Views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'lbd');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/lbd'),
        ], 'views');

        // Assets
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/lbd'),
        ], 'public');

        // Routes
        if(config('lbd.load_demo_content')) {
            $this->loadRoutesFrom(__DIR__.'/routes.php');
        }

        // Helpers
        require_once __DIR__.'/helpers.php';
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom(
            __DIR__.'/config/lbd.php', 'lbd'
        );
        $this->mergeConfigFrom(
            __DIR__.'/config/sidebar-menu.php', 'laravel-menu.settings'
        );
    }
}