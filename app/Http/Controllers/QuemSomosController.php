<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    //
    public function principal(){
        return view('site.quemsomos');
    }
}
