<?php

namespace App\Providers;

use App\View\Components\Dons;
use App\View\Components\Logo;
use Illuminate\Support\Facades\Blade;
use App\View\Components\NavigationBar;
use App\View\Components\Stats;
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
        Blade::component('Logo', Logo::class);
        Blade::component('navigation-bar', NavigationBar::class);
        Blade::component('stats', Stats::class);
        Blade::component('dons', Dons::class);
    }
}
