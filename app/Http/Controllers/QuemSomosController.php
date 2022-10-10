<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    //
    public function principal(){
        $getString = new getStringController;

        $basicoArray = $getString->pegaStings('basico');
        $quemSomosArray = $getString->pegaStings('quemSomos');
        $configArray = [
            'tituloPage' => 'Quem Somos Nós',
            'langPage' => 'pt-br',
            'routePage' => 'pt'
        ];

        $dados = array_merge($basicoArray, $quemSomosArray, $configArray);

        return view('site.quemsomos', $dados);
    }

    public function main(){  
        $getString = new getStringController;

        $basicoArray = $getString->getStings('basico');
        $quemSomosArray = $getString->getStings('quemSomos');
        $configArray = [
            'tituloPage' => 'About Us',
            'langPage' => 'en',
            'routePage' => 'en'
        ];

        $dados = array_merge($basicoArray, $quemSomosArray, $configArray);
        return view('site.quemsomos', $dados);
    }

}
