<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    function home() {
        $routes = Route::all();
        return view('home', compact('routes'));
    }

    function about() {
        $author = 'Saulo Pratti';
        $teacher = 'Mauro Pinheiro';

        return view('pages.about', compact('author', 'teacher'));
    }
}