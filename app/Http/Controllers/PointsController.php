<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Point;
use App\PointType;
use App\Trip;
use App\Http\Requests\PointRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PointsController extends Controller
{

    /**
     * Create a new points controller instance.
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
        $points = Point::all();

        return view('points.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('points.create', compact('trips', 'point_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PointRequest $request)
    {
        $point = Point::create($request->all());

        $point->trips()->attach($request->input('trip_list'));

        return redirect('points')->with([
            'flash_message' => 'Ponto criado',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Point  $point
     * @return Response
     */
    public function show(Point $point)
    {
        return view('points.show', compact('point'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Point  $point
     * @return Response
     */
    public function edit(Point $point)
    {
        return view('points.edit', compact('trips', 'point_types', 'point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Point  $point
     * @return Response
     */
    public function update(Point $point, PointRequest $request)
    {
        $point->update($request->all());

        $point->trips()->sync($request->input('trip_list'));

        return redirect('points')->with([
            'flash_message' => 'Ponto atualizado',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Point  $point
     * @return Response
     */
    public function destroy(Point $point)
    {
        $point->delete();

        return redirect('points')->with([
            'flash_message' => 'Ponto deletado.',
            'flash_message_level' => 'success'
        ]);
    }

}
