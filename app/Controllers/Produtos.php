<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController {

    public function index() {

        $data = [
            'titulo' => 'Produtos', 
            'nome'   => 'Mouse',
            'preco'  => 51.99
        ];

        echo view('templates/produtos_header', $data);
        echo view('produtos_index', $data);
        echo view('templates/produtos_footer');
    }

    public function detalhes($produto_id) {
        
        $data = [
            'produto_id' => $produto_id,
            'titulo'     => 'Produto ' . $produto_id
        ];

        echo view('templates/produtos_header', $data);
        echo view('produtos_detalhes', $data);
        echo view('templates/produtos_footer');
    }
    
}
