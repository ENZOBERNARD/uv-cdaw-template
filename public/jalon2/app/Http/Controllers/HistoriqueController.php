<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Voir;
use App\Models\Medias;
use App\Models\Playlist;

use App\Http\Controllers\FilmController;



class HistoriqueController extends Controller
{
    public static function historique(){
        $user = Auth::user()->id;
        $mediaVu = Db::table('MEDIA_TABLE')->distinct()
        ->leftJoin('VOIR',function($join) use ($user)
        {
            $join->on('MEDIA_TABLE.ID','=','VOIR.ID_MEDIA');
        })->where('VOIR.ID_USERS',$user)->orderBy('VOIR.DATE')->get();
        $mediaVu = FilmController::findVuAndLike($mediaVu);

        $playlist = Playlist::where('PSEUDO', '=', $user)->get();
        return view('contenus.historique',['films'=>$mediaVu,'playlist'=>$playlist]);
        //return $mediaVu;
        //return $playlist;
    }
}
