<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function curso(){
        return view('curso.curso');
    }
}
