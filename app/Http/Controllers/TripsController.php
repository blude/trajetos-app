<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
use App\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TripsController extends Controller
{
    function show($id) {
        $trip = Trip::findOrFail($id);
        $route = Route::where('id', $trip->route_id)->first();

        return view('trips.show', compact('trip', 'route'));
    }
}
