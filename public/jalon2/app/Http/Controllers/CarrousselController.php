<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrousselController extends Controller
{
    public function launch() {
        return view('contenus.film');
    }

    public function launch2() {
        return view('templates.multicarou');
    }
}
