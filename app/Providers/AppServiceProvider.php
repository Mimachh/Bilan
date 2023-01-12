<?php

namespace App\Providers;

use App\View\Components\Dons;
use App\View\Components\Logo;
use App\View\Components\Stats;
use App\View\Components\Petitions;
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
        Blade::component('Logo', Logo::class);
        Blade::component('navigation-bar', NavigationBar::class);
        Blade::component('stats', Stats::class);
        Blade::component('dons', Dons::class);
        Blade::component('petitions', Petitions::class);
    }
}
