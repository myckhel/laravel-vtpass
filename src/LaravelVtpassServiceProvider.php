<?php

namespace Myckhel\Vtpass;

use Illuminate\Support\ServiceProvider;

class LaravelVtpassServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'myckhel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'myckhel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/vtpass.php', 'vtpass');

        // Register the service the package provides.
        $this->app->singleton('vtpass', function ($app) {
            return new LaravelVtpass;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['vtpass'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/vtpass.php' => config_path('vtpass.php'),
        ], 'vtpass.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/myckhel'),
        ], 'laravelvtpass.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/myckhel'),
        ], 'laravelvtpass.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/myckhel'),
        ], 'laravelvtpass.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
