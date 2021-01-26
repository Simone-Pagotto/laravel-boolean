<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampGratuitoController extends Controller
{
    public function index() {
        return view('campgratuito');
    }
}
