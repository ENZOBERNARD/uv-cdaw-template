<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCrudController extends Controller
{
    //
    public function create() {
        return view('create');
    }
    public function update() {
        return view('update');
    }
    public function delete() {
        return view('delete');
    }
}
