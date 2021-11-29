<?php

namespace App\Http\Controllers;


use App\Models\AimerMedia;

use Illuminate\Http\Request;

class AimerMediaController extends Controller
{
    public function createLike($user,$media) {
        if(AimerMedia::where(['ID_USERS'=> $user ,'ID_MEDIA'=> $media ])->first()){
            $items = AimerMedia::where(['ID_USERS'=> $user ,'ID_MEDIA'=> $media ])->delete();
            echo $items;
        }
        else {
        $aimer = new AimerMedia;
        $aimer->ID_USERS = $user;
        $aimer->ID_MEDIA = $media;
        $aimer->save();
        echo 'par la';
        }
    
        return "goo";
    }
}
