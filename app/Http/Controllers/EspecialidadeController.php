<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    //
    public function principal(){
        echo 'Estou na Especialidade principal';
    }

    //
    public function buscador($filtro){
        echo 'Estou na Especialidade com filtros, filtro escolhido -> ' . $filtro;
    }

    //
    public function buscado($id){
        echo 'Estou na Especialidade escolhido de id ' . $id;
    }
}
