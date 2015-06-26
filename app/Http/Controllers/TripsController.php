<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
use App\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TripsController extends Controller
{

    public function index() {
        $trips = Trip::latest('created_at')->get();

        return view('trips.index', compact('trips'));
    }

    public function show($id) {
        $trip = Trip::findOrFail($id);
        $route = Route::where('id', $trip->route_id)->first();

        return view('trips.show', compact('trip', 'route'));
    }

    public function create() {
        return view('trips.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        Trip::create($input);

        return redirect('trips');
    }

}
