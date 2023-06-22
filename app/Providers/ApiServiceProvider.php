<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        config([
            'apiUrl' => config('api.url'),
            'aiUrl' => config('api.aiUrl'),
        ]);
    }
}
