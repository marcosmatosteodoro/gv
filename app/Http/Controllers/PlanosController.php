<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanosController extends Controller
{
    //
    public function principal(){
        echo 'Estou na Planos principal';
    }

    //
    public function buscado($id){
        echo 'Estou na Planos escolhido de id ' . $id;
    }
}
