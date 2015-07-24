<?php

namespace App\Providers;

use App\Trip;
use App\CoordinateType;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('coordinates._form', function($view)
        {
            $view->with('trips', Trip::lists('name', 'id'));
            $view->with('coordinate_types', CoordinateType::lists('name', 'id'));
        });
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
