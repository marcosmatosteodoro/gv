<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanosController extends Controller
{
    //
    public function principal(){
        return view('site.planos');
    }

    //
    public function buscado($id){
        return view('site.plano');
    }
}
