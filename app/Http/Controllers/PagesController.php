<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Route;
use App\Trip;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home() {
        $trips = Trip::all();
        $routes = Route::all();

        return view('home', compact('trips', 'routes'));
    }

    public function about() {
        $author = 'Saulo Pratti';
        $teacher = 'Mauro Pinheiro';

        return view('pages.about', compact('author', 'teacher'));
    }

    public function settings() {
        return view('pages.settings');
    }

}
