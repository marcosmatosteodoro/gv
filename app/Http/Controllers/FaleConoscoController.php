<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    //
    public function principal(){
        return view('site.faleconosco');
    }
}
