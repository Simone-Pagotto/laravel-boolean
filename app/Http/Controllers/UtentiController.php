<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* use Illuminate\Support\Facades\View; */ //Se passo i dati con la classe View nelle Facades

use App\Utente;

class UtentiController extends Controller
{
    public function index() {

        $data = Utente::all();
       /*  dd($data); */
        return view('utenti',compact('data'));

        /* return View::make('utenti', compact('data')); */ //Se passo i dati con la classe View nelle Facades
    }

    //secondo metodo che mi identifica un utente singolo dandomi maggiori dati/descrizioni
    public function show($id) {

        $dato = Utente::find($id);

        return view('utente', compact('dato'));

    }
}
