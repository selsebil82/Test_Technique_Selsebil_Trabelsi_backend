<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// pour gérer la connexion à notre bd
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Définir la longueur par défaut des chaînes pour les migrations
        Schema::defaultStringLength(191);
    }
}
