<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Config;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $myconfig = [];
        $configs = Config::all();
        foreach( $configs as $config ) {
            $myconfig[$config->key] =$config->value; 
        }
        View::share('general_info',$myconfig);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
