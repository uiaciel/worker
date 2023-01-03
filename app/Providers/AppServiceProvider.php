<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Crew;
use App\Models\Currency;
use App\Models\Job;
use App\Models\Klien;
use App\Models\Shipname;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
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

        view()->composer('*', function($view) {

            $view->with([
                'jobs' => Job::all(),
                'users' => User::all(),
                'companies' => Company::all(),
                'crews' => Crew::all(),
                'shipnames' => Shipname::all(),
                'currencies' => Currency::all(),
            ]);

        });


    }
}
