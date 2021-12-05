<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Playlist;

use App\Http\Controllers\FilmController;
use App\Http\Controllers\HistoriqueController;

class PlaylistController extends Controller
{
    public function create(){
        return view('createPlaylist');
    }
    public function add(Request $request){
    $item = Playlist::create($request->all());
    return HistoriqueController::historique();
    }
}
