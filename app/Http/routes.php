<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('settings', 'PagesController@settings');

Route::get('trajetos/{id}', 'TrajetosController@show');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('routes', 'RoutesController');
    Route::resource('trips', 'TripsController');
    Route::resource('coordinates', 'CoordinatesController');
    Route::resource('bus_stops', 'BusStopsController');
    Route::resource('landmarks', 'LandmarksController');
    Route::resource('landmark_categories', 'LandmarkCategoriesController');
    Route::resource('neighborhoods', 'NeighborhoodsController');
    Route::resource('street_views', 'StreetViewsController');
    Route::resource('turns', 'TurnsController');
    Route::resource('turn_directions', 'TurnDirectionsController');
});


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Auth'], function()
{
    Route::group(['prefix' => 'auth'], function()
    {
        // Authentication routes...
        Route::get('login', 'AuthController@getLogin');
        Route::post('login', 'AuthController@postLogin');
        Route::get('logout', 'AuthController@getLogout');

        // Registration routes...
        Route::get('register', 'AuthController@getRegister');
        Route::post('register', 'AuthController@postRegister');        
    });

    Route::group(['prefix' => 'password'], function()
    {
        // Password reset link request routes...
        Route::get('email', 'PasswordController@getEmail');
        Route::post('email', 'PasswordController@postEmail');

        // Password reset routes...
        Route::get('reset/{token}', 'PasswordController@getReset');
        Route::post('reset', 'PasswordController@postReset');
    });
});

