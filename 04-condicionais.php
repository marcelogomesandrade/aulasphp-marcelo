<!DOCTYPE html>
<html lang="pt-br">

<style>
    .normal {
        background-color: red;
        color: yellowgreen;
    }

    .repor {
        background-color: blue;
        color: white;
    }

    .urgente {
        background-color: yellow;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>

<body>
    <h1>Condicionais (if, else, elseif)</h1>
    <hr>

    <h2>Simples</h2>

    <?php

    $numero = 100;
    if ($numero > 20) {
    ?>

        <p><?= $numero ?> é maior que 20.</p>

    <?php
    }
    ?>




    <h2>Composta (if/else)</h2>

    <?php



    $produto = "Geladeira";
    $qtdEmEstoque = 0;
    $qtdCritica = 2;

    ?>

    <h3>Produto: <?= $produto ?></h3>
    <h4>Estoque: <?= $qtdEmEstoque ?></h4>



    <?php

    if ($qtdEmEstoque < $qtdCritica) {
    ?>
        <p class="repor">É necessário comprar / repor !</p>


        <?php
        if ($qtdEmEstoque === 0) {
        ?>

            <p class="urgente"> URGENTE!!! </p>
        <?php
        }
    } else {
        ?>
        <p classe="normal">Estoque normal</p>
    <?php
    }


    $a = 5;
    $b = "5";





    var_dump($a == $b);

    var_dump($a === $b);

    ?>






    <h2>Encadeada, if, else e elseif</h2>
    <hr>

    <?php



    if ($produto == "Ultrabook") {
        $garantia = 5;
    } elseif ($produto == "Geladeira") {
        $garantia = 3;
    } elseif ($produto == "TV") {
        $garantia = 2;
    } else {
        $garantia = 1;
    }



    ?>

    <p>O produto <?= $produto ?> possui garantia de <?= $garantia ?> ano <?php if ($garantia > 1) echo "s" ?>.</p>


    <h3>Encadeada usando switch/case </h3>
    <hr>


    <?php



    switch ($produto) {
        case "Ultrabook":
            $garantia = 5;
            break;
        case "Geladeira":
            $garantia = 3;
            break;
        case "TV":
            $garantia = 2;
            break;
        default:
            $garantia = 1;
            break;
    }

    ?>



    <p>Produto: <?= $produto ?></p>
    <p>Garantia: <?= $garantia ?></p>

</body>

</html>