<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Voir;
use App\Models\Medias;

class HistoriqueController extends Controller
{
    public function historique(){
        $user = Auth::user()->id;
        $mediaVu = Db::table('MEDIA_TABLE')->distinct()
        ->leftJoin('VOIR',function($join) use ($user)
        {
            $join->on('MEDIA_TABLE.ID','=','VOIR.ID_MEDIA');
        })->where('VOIR.ID_USERS',$user)->orderBy('VOIR.DATE')->get();
        return view('contenus.historique',['films'=>$mediaVu]);
    }
}
