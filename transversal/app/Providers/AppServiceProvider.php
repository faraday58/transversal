<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         \URL::forceRootUrl(config('app.url'));
        if (config('app.env') !== 'local') {
            \URL::forceScheme('https');
        }

        
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/transversal/livewire/livewire.js', $handle);
        });

    }
}
