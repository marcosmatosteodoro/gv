<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{
    //
    public function principal(){
        echo 'Estou na Exames principal';
    }

    //
    public function buscador($filtro){
        echo 'Estou na Exames com filtros, filtro escolhido -> ' . $filtro;
    }

    //
    public function buscado($id){
        echo 'Estou na Exames escolhido de id ' . $id;
    }
}
