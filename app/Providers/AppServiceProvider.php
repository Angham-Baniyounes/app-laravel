<?php

namespace App\Providers;

use App\Collaborator;
use App\Example;

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
        // $this->app->singleton('App\Example', function () {
        //     $collaborater = new Collaborator();
        //     $foo = 'foobar';
        //     return new Example($collaborater, $foo);
        // }); 

        $this->app->bind('App\Example', function () {
            $collaborater = new Collaborator();
            $foo = 'foobar';
            return new Example($collaborater, $foo);
        }); 
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
