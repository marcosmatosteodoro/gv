<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function principal(){
        $getString = new getStringController;
        
        $basicoArray = $getString->pegaStings('basico');
        $homeArray = $getString->pegaStings('home');
        $configArray = [
            'tituloPage' => 'Home',
            'langPage' => 'pt-br',
            'routePage' => 'pt'
        ];

        $dados = array_merge($basicoArray, $homeArray, $configArray);

        return view('site.home', $dados);
    }

    //
    public function main(){  
        $getString = new getStringController;

        $basicoArray = $getString->getStings('basico');
        $homeArray = $getString->getStings('home');
        $configArray = [
            'tituloPage' => 'Home',
            'langPage' => 'en',
            'routePage' => 'en'
        ];

        $dados = array_merge($basicoArray, $homeArray, $configArray);
        return view('site.home', $dados);
    }
}
