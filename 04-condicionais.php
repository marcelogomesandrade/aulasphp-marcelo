<!DOCTYPE html>
<html lang="pt-br">

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

        echo "<p>$numero é maior que 20.</p>";
    }


    ?>
    <!-- if (se), else (senão) -->

    <h2>Composta (if/else)</h2>

    <?php 

    // Controle de Estoque 

    $produto = "Ultrabook Dell";
    $qtdEmEstoque = 10; // o que temos no momento 
    $qtdCritica = 2; // minimo necessário. 
    
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h4>Estoque: <?=$qtdEmEstoque?></h4>

<!-- Se a quantidade em estoque for abaixo da quantidade critica , então o sistema deve avisar e pedir para repor.-->

<?php

if ($qtdEmEstoque < $qtdCritica){
    echo "<p>É necessário comprar / repor !</p>";

    //Condicional SIMPLES/ANINHADA 
    if ($qtdEmEstoque===0){

        echo "<p> URGENTE!!! </P>";}


    }

 else {
     echo "<p>Estoque normal</p>";
}

$a = 5;
$b = 5;



//== IGUALDADE DE VALORES 

var_dump($a ==$b);//true
//=== IGUALDADE DE VALORES E TIPO DE DADOS 

var_dump($a ===$b);//false

?>


<!-- Caso contrário, simplesmente mostrar o que o estoque está normal -->




</body>

</html>