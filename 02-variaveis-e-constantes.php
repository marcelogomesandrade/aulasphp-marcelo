<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

    <style>
  p {font-family : Verdana;}
  .destaque {
    background-color:Yellow;
    color: red;
  }

    </style>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

    <?php

    // Variáveis 

    $curso = "Programador Web";
    $ano = 2023;
    $area = "Back-End";

    // Estamos no Programador web em 2023

    // Formas de saídas COMPLETAS VIA PHP 

    // saída Interpolada 

    echo "<p>Estamos no <span class='destaque'>$curso</span> em $ano </p>";
    echo "<p>Estamos no <span class=\"destaque\">$curso</span> em $ano </p>";

    // Não dar certo, as variáveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano </p>';

    // saida com CONCATENAÇÃO
    echo '<p>Estamos no '.$curso.' em '.$ano.'</p>';
    echo "<p>Estamos no ".$curso." em ".$ano."</p>";


    ?>
<hr>
    <!-- Forma de saída ABREVIADA/SIMPLIFICADA -->

<p> Estamos no <?=$curso?> em <?=$ano?></p>

<hr>

<?php
 // Constantes (recomenda-se dar nome em MAIÚSCULAS)

 // Define é forma antiga, const é a forma mais atual, mas podendo optar em quaisquer uma 

 define("AUTOR","Marcelo Gomes de Andrade");
 const EMPRESA = "ABC Tecnologia";
 const ANO_FUNDACAO = 2000;


?>
<!--Saídas-->
<P>Autor do site:<?=AUTOR?></p>
<p>Nome da empresa:<?=EMPRESA?></p>
<p>Fundada em :<?=ANO_FUNDACAO?></p>



</body>
</html>