<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductModelServiceProvider extends ServiceProvider
{
/**
 * Bootstrap services.
 *
 * @return void
 */
public function boot()
{
    \App\Product::observe(\App\Observer\ProductObserver::class);
}

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
