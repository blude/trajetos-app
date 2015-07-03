<?php

namespace App\Providers;

use App\Trip;
use App\PointType;
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
        view()->composer('points._form', function($view)
        {
            $view->with('trips', Trip::lists('name', 'id'));
            $view->with('point_types', PointType::lists('label', 'id'));
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
