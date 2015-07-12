<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        $router->model('routes', 'App\Route');
        $router->model('trips', 'App\Trip');
        $router->model('points', 'App\Point');
        $router->model('point_types', 'App\PointType');
        $router->model('bus_stops', 'App\BusStop');
        $router->model('landmarks', 'App\Landmark');
        $router->model('landmark_categories', 'App\LandmarkCategory');
        $router->model('neighborhoods', 'App\Neighborhood');
        $router->model('street_views', 'App\StreetView');
        $router->model('turns', 'App\Turn');
        $router->model('turn_directions', 'App\TurnDirection');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
