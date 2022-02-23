<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Helloworld extends BaseController {
    public function index() {
        echo "<h1>Hello World, CodeIgniter4</h1>";
    }

    public function nome($nome, $idade, $sexo = null, $peso = null) {
        echo "<h1> Me fale sobre você ! </h1>";
        echo "<h2> Meu nome é ${nome}, tenho ${idade} anos";
        if ($sexo != null) {
            echo ", sou do sexo ${sexo}";
        }
        if ($peso != null) {
            echo " e meu peso atual é ${peso} kg";
        }
        echo ".</h2>";
    }
}
