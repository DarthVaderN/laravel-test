<?php

namespace App\Providers;

use App\Exceptions\CustomSessionHandler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\ConnectionInterface;

use Session;
use Config;

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
    public function boot(ConnectionInterface $connection)
    {
        Session::extend('app-database', function($app) use ($connection) {
            $table   = Config::get('session.table');
            $minutes = Config::get('session.lifetime');
            return new CustomSessionHandler($connection, $table, $minutes);
        });
    }
}
