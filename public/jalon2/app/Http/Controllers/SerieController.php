<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SerieController extends Controller
{

    //


    public function readFilmById($id) {
        $film = Medias::where('ID', $id)->get();
        return $film;
    }

    public function createFilm(Request $request) {
        $item = Medias::create($request->all());
        return 'Film créé avec succès!';
    }

    public function updateFilmById(Request $request,$id) {
        $data = request()->except(['_token']);
        Medias::where('ID', '=', $id)->update($data);

        return 'Film modifié avec succès!';
    }
    public function deleteFilmById($id) {
        Medias::where('ID', '=', $id)->delete();
        return 'Film supprimé avec succès!';
    }

    public function afficherSerie($id){
        $film = $this->readFilmById($id);
        return view('contenus.film',['film' => $film[0]]);
        //return $film[0];
    }

    public function afficherAllSerie(){
        $films = Medias::all()->where('TYPE', "TVSeries");
        $films = SerieController::findVuAndLike($films);
        return view('contenus.listeSerie',['films'=>$films]);
        //return $films;

}

    public static function findVuAndLike($films){
        $mediaVu =new Medias;
        $mediaLike = [];
        if(Auth::check()){
            $user=Auth::user()->id;
            $mediaVu = Db::table('MEDIA_TABLE')->distinct()
            ->leftJoin('VOIR',function($join) use ($user)
            {
                $join->on('MEDIA_TABLE.ID','=','VOIR.ID_MEDIA');
            })->where('VOIR.ID_USERS',$user)->get();

            $mediaLike = Db::table('MEDIA_TABLE')->distinct()
            ->leftJoin('AIMER_MEDIA',function($join) use ($user)
            {
                $join->on('MEDIA_TABLE.ID','=','AIMER_MEDIA.ID_MEDIA');
            })->where('AIMER_MEDIA.ID_USERS',$user)->get();

            foreach($films as $film){
                foreach($mediaVu as $mv){
                    if($film->ID == $mv->ID_MEDIA){
                        $film->vu = 1;
                        break;
                    }
                    else{
                        $film->vu=0;
                    }
                }
                foreach($mediaLike as $ml)
                    if($film->ID == $ml->ID_MEDIA){
                        $film->like = 1;
                        break;
                    }
                    else{
                        $film->like=0;
                    }

                }
            }
            return $films;
    }

public function postSearch(Request $request)
{

    $filters = [
           'genre' => $request->genre,
           'year'  => $request->year,
       ];

     $films = Medias::where(function ($query) use ($filters) {
        $query->where('TYPE', '=','TVSeries');
           if ($filters['genre']) {
               foreach ($filters['genre'] as $g)
               {
                $query->where('GENRE', 'LIKE', '%'.$g.'%');
               }
               //$query->where('GENRE', 'LIKE', '%'.$filters['genre'].'%');
           }
           if ($filters['year']) {
             $query->where('DATE_DE_SORTIE', 'LIKE','%'.$filters['year'].'%');
            //$query->where('GENRE', 'LIKE', '%'.$filters['genre'].'%');
        }
       })->get();

       $mediaVu =new Medias;
       $mediaLike = [];
       if(Auth::check()){
           $user=Auth::user()->id;
           $mediaVu = Db::table('MEDIA_TABLE')->distinct()
           ->leftJoin('VOIR',function($join) use ($user)
           {
               $join->on('MEDIA_TABLE.ID','=','VOIR.ID_MEDIA');
           })->where('VOIR.ID_USERS',$user)->get();

           $mediaLike = Db::table('MEDIA_TABLE')->distinct()
           ->leftJoin('AIMER_MEDIA',function($join) use ($user)
           {
               $join->on('MEDIA_TABLE.ID','=','AIMER_MEDIA.ID_MEDIA');
           })->where('AIMER_MEDIA.ID_USERS',$user)->get();

           foreach($films as $film){
               foreach($mediaVu as $mv){
                   if($film->ID == $mv->ID_MEDIA){
                       $film->vu = 1;
                       break;
                   }
                   else{
                       $film->vu=0;
                   }
               }
               foreach($mediaLike as $ml){
                   if($film->ID == $ml->ID_MEDIA){
                       $film->like = 1;
                       break;
                   }
                   else{
                       $film->like=0;
                   }
                }
               }
       }

       return view('contenus.listeSerieSearch',['films'=>$films]);
 }
}
