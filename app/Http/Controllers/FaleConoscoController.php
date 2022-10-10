<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    //
    public function principal(){
        $getString = new getStringController;

        $basicoArray = $getString->pegaStings('basico');
        $faleConoscoArray = $getString->pegaStings('faleConosco');
        $configArray = [
            'tituloPage' => 'Fale Conosco',
            'langPage' => 'pt-br',
            'routePage' => 'pt'
        ];

        $dados = array_merge($basicoArray, $faleConoscoArray, $configArray);

        return view('site.faleconosco', $dados);
    }

    //
    public function main(){  
        $getString = new getStringController;

        $basicoArray = $getString->getStings('basico');
        $faleConoscoArray = $getString->getStings('faleConosco');
        $configArray = [
            'tituloPage' => 'Contact us',
            'langPage' => 'en',
            'routePage' => 'en'
        ];

        $dados = array_merge($basicoArray, $faleConoscoArray, $configArray);
        return view('site.faleconosco', $dados);
    }
}
