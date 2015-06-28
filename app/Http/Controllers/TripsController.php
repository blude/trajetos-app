<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
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
     * @return Response
     */
    public function show($id) {
        $trip = Trip::findOrFail($id);

        return view('trips.show', compact('trip'));
    }

    /**
     * Show the page to create a new trip.
     *
     * @return Response
     */
    public function create() {
        return view('trips.create');
    }

    /**
     * Save a new trip.
     *
     * @param TripRequest $request
     * @return Response
     */
    public function store(TripRequest $request) {
        Trip::create($request->all());

        return redirect('trips');
    }

    /**
     * Edit a trip.
     *
     * @param $id
     * @return Response
     */
    public function edit($id) {
        $trip = Trip::findOrFail($id);

        return view('trips.edit', compact('trip'));
    }

    /**
     * Update an edited trip.
     *
     * @param $id
     * @param TripRequest $request
     * @return Response
     */
    public function update($id, TripRequest $request) {
        $trip = Trip::findOrFail($id);

        $trip->update($request->all());

        return redirect('trips');
    }

}
