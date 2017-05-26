<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Config;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('configs'))
        {
            
            $myconfig = [];
            $configs = Config::all();
            foreach( $configs as $config ) {
                $myconfig[$config->key] =$config->value; 
            }
           
            View::share('general_info',$myconfig);
        }
        
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
