<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
use App\Route;
use App\Http\Requests\TripRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TripsController extends Controller
{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show all trips.
     *
     * @return Response
     */
    public function index() {
        $trips = Trip::all();

        return view('trips.index', compact('trips'));
    }

    /**
     * Show a single trip.
     *
     * @param Trip $trip
     * @return Response
     */
    public function show(Trip $trip) {
        return view('trips.show', compact('trip'));
    }

    /**
     * Show the page to create a new trip.
     *
     * @return Response
     */
    public function create() {
        $routes = Route::lists('name', 'id');

        return view('trips.create', compact('routes'));
    }

    /**
     * Save a new trip.
     *
     * @param TripRequest $request
     * @return Response
     */
    public function store(TripRequest $request) {
        Trip::create($request->all());

        return redirect('trips')->with([
            'flash_message' => 'Viagem adicionada',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Edit a trip.
     *
     * @param Trip $trip
     * @return Response
     */
    public function edit(Trip $trip) {
        $routes = Route::lists('name', 'id');

        return view('trips.edit', compact('routes', 'trip'));
    }

    /**
     * Update an edited trip.
     *
     * @param Trip $trip
     * @param TripRequest $request
     * @return Response
     */
    public function update(Trip $trip, TripRequest $request) {
        $trip->update($request->all());

        return redirect('trips');
    }

    /**
     * Delete a given trip and redirect with a flash message.
     *
     * @param Trip $trip
     */
    public function destroy(Trip $trip) {
        $trip->delete();

        return redirect('trips')->with([
            'flash_message' => 'Viagem deletada.',
            'flash_message_level' => 'success'
        ]);
    }

}
