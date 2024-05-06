<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Toplevelcategory;
use App\Models\Midlevelcategory;
use App\Models\Endlevelcategory;

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
        // Schema::defaultStringLength(191);

        //rendre ces modèles accessibles partout dans le site
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();

        View::share('toplevelcategories', $toplevelcategories);
        View::share('midlevelcategories', $midlevelcategories);
        View::share('endlevelcategories', $endlevelcategories);

    }
}
