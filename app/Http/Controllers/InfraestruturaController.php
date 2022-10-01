<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfraestruturaController extends Controller
{
    //
    public function principal(){
        echo 'Estou na Infraestrutura principal';
    }

    //
    public function buscado($id){
        echo 'Estou na Infraestrutura escolhido de id ' . $id;
    }
}
