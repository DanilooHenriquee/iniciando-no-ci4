<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categorias extends BaseController
{
    public function index()
    {
        //chamar uma view que exibe todas as categorias.
    }

    public function inserir() 
    {

        $data = [
            'titulo' => 'Inserir nova Categoria',
            'acao'   => 'Inserir',
            'msg'    => '',   
        ];

        if ($this->request->getMethod() === 'post') {
            $categoriaModel = new \App\Models\CategoriaModel;
            $categoriaModel->set('nomecategoria', $this->request->getPost('nomecategoria'));

            if ($categoriaModel->insert()) {
                $data['msg'] = 'Categoria inserida com sucesso';
            } else {
                $data['msg'] = 'Erro ao inserir categoria';
            }

        }

        echo view('templates/produtos_header', $data);
        echo view('categorias_form', $data);
        echo view('templates/produtos_footer');
    }
}
