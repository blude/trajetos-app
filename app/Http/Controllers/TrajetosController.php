<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TrajetosController extends Controller
{
    public function show($id)
    {
        $trip = Trip::findOrFail($id)->first();

        return view('trajetos.show', compact('trip'));
    }
}
