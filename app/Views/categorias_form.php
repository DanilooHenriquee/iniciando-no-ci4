<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>

    <style>
        button,
        [type=submit] {
            background-color: rgb(101, 255, 101);
            border: none;
            padding: 8px;
            border-radius: 10px;
        }

        [type=submit] {
            width: 150px;
        }

        a {
            text-decoration: none;
            font-size: 16px;
            color: black;
            font-weight: 400;
        }
    </style>

</head>

<body>
    <h2><?php echo $titulo ?></h2>

    <p><button><a href="<?php echo base_url('categorias'); ?>">Voltar Para Lista de Categorias</a></button></p>

    <strong> <?php echo $msg ?> </strong>

    <form method="post">
        <p>Nome da Categoria:
            <input type="text" name="nomecategoria" value="<?php echo (isset($categoria) ? $categoria->nomecategoria : ''); ?>">
        </p>
        <p>
            <input type="submit" value="<?php echo $acao ?>">
        </p>
    </form>
</body>

</html>