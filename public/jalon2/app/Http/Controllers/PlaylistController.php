<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;
use App\Models\Playlist;
use App\Models\Contenir;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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

    public function addMedia($playlist,$media){
        $contenir = new Contenir();
        $contenir->ID_PLAYLIST= $playlist;
        $contenir->ID_MEDIA= $media;
        $contenir->save();
            return view('historique');
    }

    public function listeFilm($playlist){
        $films = Db::table('MEDIA_TABLE')->distinct()
            ->leftJoin('CONTENIR',function($join) use ($playlist)
            {
                $join->on('MEDIA_TABLE.ID','=','CONTENIR.ID_MEDIA');
            })->where('CONTENIR.ID_PLAYLIST',$playlist)->get();
        $films = FilmController::findVuAndLike($films);
        $playlistInfo = Playlist::where('ID','=',$playlist)->first();
        //return $films;
        return view('contenus.listePlaylist',['films'=>$films,'playlist'=>$playlistInfo]);
    }
    
    
}
