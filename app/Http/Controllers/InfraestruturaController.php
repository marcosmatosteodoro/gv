<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfraestruturaController extends Controller
{
    //
    public function principal(){
        return view('site.infraestrutura');
    }

    //
    public function buscado($id){
        return view('site.infraestruturaGet');
    }
}
