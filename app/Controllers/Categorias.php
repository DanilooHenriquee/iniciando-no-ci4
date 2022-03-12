<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categorias extends BaseController
{
    public function index()
    {
        //chamar uma view que exibe todas as categorias.
        $categoriaModel = new \App\Models\CategoriaModel;

        $data = [
            'categorias' => $categoriaModel->find(),
            'titulo'     => 'Listando todas as categorias'
        ];

        echo view('categorias', $data);

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

        echo view('categorias_form', $data);

    }

    public function editar($id) 
    {
        $data = [
            'titulo' => 'Editar Categoria ' . $id,
            'acao'   => 'Editar',
            'msg'    => '',   
        ];

        $categoriaModel = new \App\Models\CategoriaModel;
        $categoria = $categoriaModel->find($id);

        if($this->request->getMethod() === 'post') {
            $categoria->nomecategoria = $this->request->getPost('nomecategoria');

            if($categoriaModel->update($id, $categoria)) {
                $data['msg'] = 'Categoria editada com sucesso';
            } else {
                $data['msg'] = 'Erro ao editar categoria';
            }
        }

        $data['categoria'] = $categoria;

        echo view('categorias_form', $data);

    }
}
