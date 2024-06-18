<?php

namespace App\Providers;

use App\Models\product;
use App\Observers\productObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        // product::observe(productObserver::class);
        Paginator::useBootstrap();
    }
}
