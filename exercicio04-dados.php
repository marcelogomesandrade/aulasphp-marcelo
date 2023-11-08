<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<?php

$produto = $_POST ["produto"];
$fabricante = $_POST ["fabricante"];
$preco = $_POST ["preco"];
$descricao = $_POST["descricao"];

?>

<h2>Dados Enviados</h2>
<hr>

<ul>
<li>Produto: <?=$produto ?></li>
<li>Fabricante: <?=$fabricante?></li>
<li>Preço R$: <?=$preco?></li>
<li>Descrição: <?=$descricao ?></li>

</ul>



<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
    
</body>
</html>