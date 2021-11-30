<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrousselController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/film', 'App\Http\Controllers\CarrousselController@launch');
Route::get('/film/{id}', 'App\Http\Controllers\FilmController@readFilmById');
Route::post('/filmCreate', 'App\Http\Controllers\FilmController@createFilm');
Route::post('/filmUpdate/{id}', 'App\Http\Controllers\FilmController@updateFilmById');
Route::post('/filmDelete/{id}', 'App\Http\Controllers\FilmController@deleteFilmById');

Route::get('/', 'App\Http\Controllers\LoginController@login');

Route::get('/jalon2show', 'App\Http\Controllers\FormCrudController@show');
Route::get('/jalon2create', 'App\Http\Controllers\FormCrudController@create');
Route::get('/jalon2update/{id}', 'App\Http\Controllers\FormCrudController@update');
Route::get('/jalon2delete/{id}', 'App\Http\Controllers\FormCrudController@delete');

Route::get('comptes', function() {
    // Réservé aux utilisateurs authentifiés
})->middleware('auth');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/poubelle', 'App\Http\Controllers\CarrousselController@launch');

Route::get('/carou', 'App\Http\Controllers\CarrousselController@launch2');
Route::get('/home', 'App\Http\Controllers\HomeController@home');

Route::get('/loadfilm', 'App\Http\Controllers\RemplirBdd@RemplirMaBaseDeFilm');

Route::get('/pagefilm/{id}','App\Http\Controllers\FilmController@afficherFilm');

Route::get('/allFilm','App\Http\Controllers\FilmController@afficherAllFilm');

Route::get('/likeCreate/{user}/{media}','App\Http\Controllers\AimerMediaController@createLike');

Route::get('/voirCreate/{user}/{media}','App\Http\Controllers\VoirController@createVoir');

