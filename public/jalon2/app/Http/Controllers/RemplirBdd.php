<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemplirBdd extends Controller
{
    //
    public function RemplirMaBaseDeFilm(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_u9lnuo3a",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }
}
