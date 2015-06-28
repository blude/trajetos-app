<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Route;
use App\Http\Requests\RouteRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoutesController extends Controller
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
     * Show all routes.
     *
     * @return Response
     */
    public function index() {
        $routes = Route::all();

        return view('routes.index', compact('routes'));
    }

    /**
     * Show a single route.
     *
     * @return Response
     */
    public function show($id) {
        $route = Route::findOrFail($id);

        return view('routes.show', compact('route'));
    }

    /**
     * Show the page to create a new route.
     *
     * @return Response
     */
    public function create() {
        return view('routes.create');
    }

    /**
     * Save a new route.
     *
     * @param RouteRequest $request
     * @return Response
     */
    public function store(RouteRequest $request) {
        Route::create($request->all());

        return redirect('routes');
    }

    /**
     * Edit a route.
     *
     * @param $id
     * @return Response
     */
    public function edit($id) {
        $route = Route::findOrFail($id);

        return view('routes.edit', compact('route'));
    }

    /**
     * Update an edited route.
     *
     * @param $id
     * @param RouteRequest $request
     * @return Response
     */
    public function update($id, RouteRequest $request) {
        $route = Route::findOrFail($id);

        $route->update($request->all());

        return redirect('routes');
    }

}
