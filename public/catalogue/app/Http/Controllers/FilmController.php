<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function launch() {
        return view('contenus.film');
    }
}
