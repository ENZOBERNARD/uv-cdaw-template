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

Route::get('/film', 'App\Http\Controllers\FilmController@launch');

Route::get('/login', 'App\Http\Controllers\LoginController@login');

Route::get('/', 'App\Http\Controllers\LoginController@login');