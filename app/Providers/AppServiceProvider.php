<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\View\Components\NavigationBar;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('navigation-bar', NavigationBar::class);
    }
}
