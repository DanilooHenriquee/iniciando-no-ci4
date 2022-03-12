<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('app/css/categorias.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

    <title> <?php echo $titulo ?> </title>

    <style>
        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .tabela {
            width: 80%;
        }

        .tabela,
        .tabela td,
        .tabela tr {
            border: 1px solid green;
        }

        .tabela td {
            padding: 10px;
        }

        button {
            background-color: rgb(101, 255, 101);
            border: none;
            padding: 8px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            font-size: 16pt;
            color: black;
            font-weight: 400;
        }
    </style>

</head>

<body>

    <main class="main">
        <h2> <?php echo $titulo ?> </h2>
        <p> <button><a href=" <?php echo base_url('categorias/inserir'); ?> ">+ Inserir Nova Categoria</a></button></p>
        <table class="tabela">
            <tr>
                <td>Código da Categoria</td>
                <td>Nome da Categoria</td>
                <td>&nbsp</td>
            </tr>
            <?php foreach ($categorias as $categoria) : ?>
                <tr>
                    <td> <?php echo $categoria->id ?> </td>
                    <td> <?php echo $categoria->nomecategoria ?> </td>
                    <td><a href="<?php echo base_url('categorias/editar/' . $categoria->id); ?>">Editar</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </main>
</body>

</html>