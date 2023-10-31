<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - php</title>
</head>
<body>
    <h1>Exercicio 02</h1>
    <hr>


    <?php

    $dados = [
  "nome"=> "Chapolin", 
  "senha"=> "1456teste",
  "idade"=> 26,
  "cidade"=> "São Paulo",
  "telefone"=> ["11-94556-4567","11-95672-3456"]
    ];

?>

<ol>
 <li>Nome de Usuário:<?=$dados["nome"]?></li>
 <li>Idade:<?=$dados["idade"]?> anos</li>
 <li>Cidade:<?=$dados["cidade"]?></li>
 <li>Telefone:<?=$dados["telefone"][1]?></li>

 <pre><?=var_dump($dados)?></pre>
 

</ol>

</body>
</html>