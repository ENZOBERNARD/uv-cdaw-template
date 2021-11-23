<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medias;

class FilmController extends Controller
{
    public function readAllFilm() {
       //return $this->belongsTo(Media::class, "")
    }

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

    public function afficherFilm($id){
        $film = $this->readFilmById($id);
        return view('contenus.film',['film' => $film[0]]);
        //return $film;
    }
}
