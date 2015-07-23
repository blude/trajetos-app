<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Coordinate;
use App\Neighborhood;
use App\Http\Requests\CoordinateRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoordinatesController extends Controller
{

    /**
     * Create a new coordinates controller instance.
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
        $coordinates = Coordinate::all();

        return view('coordinates.index', compact('coordinates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $neighborhoods = Neighborhood::lists('name', 'id');

        return view('coordinates.create', compact('neighborhoods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CoordinateRequest $request)
    {
        $coordinate = Coordinate::create($request->all());

        $coordinate->trips()->attach($request->input('trip_list'));

        return redirect('admin/coordinates')->with([
            'flash_message' => 'Coordenada criada',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Coordinate  $coordinate
     * @return Response
     */
    public function show(Coordinate $coordinate)
    {
        return view('coordinates.show', compact('coordinate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Point  $coordinate
     * @return Response
     */
    public function edit(Point $coordinate)
    {
        $neighborhoods = Neighborhood::lists('name', 'id');

        return view('coordinates.edit', compact('point', 'neighborhoods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Coordinate  $coordinate
     * @return Response
     */
    public function update(Coordinate $coordinate, CoordinateRequest $request)
    {
        $coordinate->update($request->all());

        $coordinate->trips()->sync($request->input('trip_list'));

        return redirect('admin/coordinates')->with([
            'flash_message' => 'Ponto atualizado',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Coordinate  $coordinate
     * @return Response
     */
    public function destroy(Coordinate $coordinate)
    {
        $point->delete();

        return redirect('admin/coordinates')->with([
            'flash_message' => 'Coordenada deletada.',
            'flash_message_level' => 'success'
        ]);
    }

}
