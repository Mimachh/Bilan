<?php

namespace App\Providers;

use App\View\Components\BreadCrumbPerso;
use App\View\Components\Carousel;
use App\View\Components\Categories;
use App\View\Components\Dons;
use App\View\Components\Logo;
use App\View\Components\Stats;
use App\View\Components\Petitions;
use Illuminate\Support\Facades\Blade;
use App\View\Components\NavigationBar;
use App\View\Components\WelcomePage;
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
        Blade::component('stats', Stats::class);
        Blade::component('petitions', Petitions::class);
        Blade::component('carousel', Carousel::class);
        Blade::component('categories', Categories::class);
        Blade::component('welcome-page', WelcomePage::class);
        Blade::component('breadcrumbs', BreadCrumbPerso::class);

    }
}
