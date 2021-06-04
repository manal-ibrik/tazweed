<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Categories;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Schema;
use Illuminate\Support\Facades\Schema;
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
       Schema::defaultStringLength(191);
       if(Schema::hasTable('abouts')){
           view()->share('Abouts',About::all());
       }
       if(Schema::hasTable('solutions')){
           view()->share('solutions',Solution::all());
       }
       if(Schema::hasTable('services')){
           view()->share('services',Service::all());
       }
    //    if(Schema::hasTable('categories')){
    //        view()->share('categories',Categories::all());
    //    }
    }
}
