<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BusStop;
use App\Neighborhood;
use App\Point;
use App\Http\Requests\BusStopRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusStopsController extends Controller
{
    /**
     * Create a new trips controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bus_stops = BusStop::all();

        return view('bus_stops.index', compact('bus_stops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $points = Point::lists('id', 'id');
        $neighborhoods = Neighborhood::lists('name', 'id');

        return view('bus_stops.create', compact('points', 'neighborhoods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BusStopRequest $request)
    {
        $bus_stop = BusStop::create($request->all());

        return redirect('bus_stops')->with([
            'flash_message' => 'Parada criada',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(BusStop $bus_stop)
    {
        return view('bus_stops.show', compact('bus_stop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(BusStop $bus_stop)
    {
        $neighborhoods = Neighborhood::lists('name', 'id');
        $points = Point::lists('id', 'id');

        return view('bus_stops.edit', compact('bus_stop', 'neighborhoods', 'points'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(BusStop $bus_stop, BusStopRequest $request)
    {
        $bus_stop->update($request->all());

        return redirect('bus_stops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(BusStop $bus_stop)
    {
        $bus_stop->delete();

        return redirect('bus_stops')->with([
            'flash_message' => 'Parada deletada.',
            'flash_message_level' => 'success'
        ]);
    }
}
