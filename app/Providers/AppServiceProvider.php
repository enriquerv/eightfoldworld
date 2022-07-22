<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();

        if( env("APP_SERVER") ) {
            // Si el servidor manda error al hacer migracion, se agrega la siguiente línea
            Builder::defaultStringLength(191);
            $this->app->bind('path.public',function(){
                return realpath(base_path().'/../public_html');
            });
        }
    }
}
