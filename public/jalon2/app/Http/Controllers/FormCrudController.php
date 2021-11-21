<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

class FormCrudController extends Controller
{
    //
    public function create() {
        return view('create');
    }
    public function show() {
        
        return view('create');
    }
    public function update($id) {
        $film = Medias::where('ID', $id)->get();
        return view('update', ['film'=>$film]);
    }
    public function delete($id) {
        $film = Medias::where('ID', $id)->get();
        return view('delete', ['film'=>$film]);
    }
}
