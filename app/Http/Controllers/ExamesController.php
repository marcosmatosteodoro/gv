<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{
    //
    public function principal(){
        return view('site.exames');
    }

    //
    public function buscador($filtro){
        return view('site.examesFiltros');
    }

    //
    public function buscado($id){
        return view('site.exame');
    }
}
