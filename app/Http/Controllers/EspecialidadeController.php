<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    //
    public function principal(){
        return view('site.especialidades');
    }

    //
    public function buscador($filtro){
        return view('site.especialidadesFiltros');
    }

    //
    public function buscado($id){
        return view('site.especialidade');
    }
}
