<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Dao\Shoes\ShoesInterface', 'App\Dao\Shoes\ShoesDao');
        $this->app->bind('App\Contracts\Dao\Sales\SalesInterface', 'App\Dao\Sales\SalesDao');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
