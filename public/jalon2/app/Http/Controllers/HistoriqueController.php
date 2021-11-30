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
        $UserHistoryId = Voir::where('ID_USERS', '=', $user)->get('ID_MEDIA');
        $mediaVu = Medias::whereIn('ID', $UserHistoryId)->get();
        return view('contenus.historique',['films'=>$mediaVu]);
    }
}
