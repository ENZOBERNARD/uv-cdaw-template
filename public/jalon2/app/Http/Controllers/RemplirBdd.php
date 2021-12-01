<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

class RemplirBdd extends Controller
{
    //
    public function RemplirMaBaseDeFilm(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_3iooo844",
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
        $allMedia = json_decode($response,true)["items"];
        $index = 0;


        foreach($allMedia as $m){
            if($index < 30){
            $id = $m["id"];
            $curl2 = curl_init();
            curl_setopt_array($curl2, array(
            CURLOPT_URL => "https://imdb-api.com/en/API/Title/k_3iooo844/". $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            ));
            $filmInfoJson = curl_exec($curl2);
            curl_close($curl2);
            $filmInfo = json_decode($filmInfoJson,true);
            $media = new Medias;
            $media->TITRE = $m["title"];
            $media->DESCRIPTION = $filmInfo['plot'];
            $media->DATE_DE_SORTIE = $filmInfo['releaseDate'];
            $media->ACTEURS = $filmInfo['stars'];
            $media->REALISATEUR = $filmInfo['directors'];
            $media->DUREE = $filmInfo['runtimeMins'];
            $media->PAYS = $filmInfo['countries'];
            $media->AFFICHE = $m['image'];
            $media->NOTE = $m['imDbRating'];
            $media->GENRE = $filmInfo['genres'];
            $media->save();
            $index = $index + 1;
            }

        }
        return $filmInfo;
    }
}
