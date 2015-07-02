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
     * Create a new routes controller instance.
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
     * @param Route $route
     * @return Response
     */
    public function show(Route $route) {
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

        return redirect('routes')->with([
            'flash_message' => 'Linha adicionada',
            'flash_message_level' => 'success'
        ]);
    }

    /**
     * Edit a route.
     *
     * @param Route $route
     * @return Response
     */
    public function edit(Route $route) {
        return view('routes.edit', compact('route'));
    }

    /**
     * Update an edited route.
     *
     * @param Route $route
     * @param RouteRequest $request
     * @return Response
     */
    public function update(Route $route, RouteRequest $request) {
        $route->update($request->all());

        return redirect('routes');
    }

    /**
     * Delete a given route and redirect with a flash message.
     *
     * @param Route $route
     */
    public function destroy(Route $route) {
        $route->delete();

        return redirect('routes')->with([
            'flash_message' => 'Linha deletada.',
            'flash_message_level' => 'success'
        ]);
    }

}
