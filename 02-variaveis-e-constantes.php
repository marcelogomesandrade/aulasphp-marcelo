<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
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

    echo "<p>Estamos no $curso em $ano </p>";

    // Não dar certo, as variáveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano </p>';

    // saida com CONCATENAÇÃO
    echo '<p>Estamos no '.$curso.' em '.$ano.'</p>';
    echo "<p>Estamos no ".$curso." em ".$ano."</p>";


    ?>
<hr>
    <!-- Forma de saída ABREVIADA/SIMPLIFICADA -->

<p> Estamos no <?=$curso?> em <?=$ano?></p>

</body>
</html>