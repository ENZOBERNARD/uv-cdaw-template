<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voir;

class VoirController extends Controller
{
    public function createVoir($user,$media) {
        if(Voir::where(['ID_USERS'=> $user ,'ID_MEDIA'=> $media ])->first()){
            $items = Voir::where(['ID_USERS'=> $user ,'ID_MEDIA'=> $media ])->delete();
            return 0;
        }
        else {
        $vue = new Voir;
        $vue->ID_USERS = $user;
        $vue->ID_MEDIA = $media;
        $vue->DATE = date('Y-m-d');
        $vue->save();
        return 1;
        }
    
        
    }
}
