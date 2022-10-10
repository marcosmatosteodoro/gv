<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getStringController extends Controller
{

    public function pegaStings($arquivo){
        require_once "lang/$arquivo.php";
        return ${"$arquivo" . "Strings"}['pt-br'];
    }

    public function getStings($file){
        require_once "lang/$file.php";
        return ${"$file" . "Strings"}['en'];
    }
}
