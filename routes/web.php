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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');//devo fare l'identificatore per usare le config Named Routes

Route::get('/dopoilcorso', function () {
    return view('dopoilcorso');
})->name('dopoilcorso');

Route::get('/campgratuito', function () {
    return view('campgratuito');
})->name('campgratuito');;

Route::get('/candidatiora', function () {
    return view('candidatiora');
})->name('candidatiora');;
