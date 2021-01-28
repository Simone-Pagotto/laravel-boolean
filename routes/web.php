<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home','HomeController@index')->name('home');

Route::get('/corso', 'CorsoController@index')->name('corso');//devo fare l'identificatore per usare le config Named Routes

Route::get('/dopoilcorso', 'DopoilcorsoController@index')->name('dopoilcorso');

Route::get('/campgratuito', 'CampgratuitoController@index')->name('campgratuito');

Route::get('/candidatiora', 'CandidatioraController@index')->name('candidatiora');

Route::get('/utenti', 'UtentiController@index')->name('utenti');

Route::get('/utenti/{id}', 'UtentiController@show')->name('utenti.show');

