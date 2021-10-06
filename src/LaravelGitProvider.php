<?php

namespace Jromero\LaravelGit;

use Illuminate\Support\ServiceProvider;

class LaravelGitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->app->make('Jromero\LaravelGit\Controllers\MainController');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-git-view');

        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/jromero/laravel-git'),
            ],
            'laravel-git-views'
        );

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/jromero/laravel-git'),
        ], 'public');
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
