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
        // $this->app->bind('App\Libraries\NotificationsInterface', function($app) {
        //     return new \App\Libraries\Notifications();
        // });
        
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    //     dd(app()->environmentFilePath(), // <-- returns the .env path
    //         env('DB_PORT'), // <-- returns db port
    //         env('DB_DATABASE'), // <-- returns database name
    //         env('DB_PASSWORD'), // <-- returns db password
    //         env('DB_HOST') // <-- returns db host
    // );
    }
}
