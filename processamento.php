<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Dados</title>
</head>

<body>
    <h1>Processamento de Dados vindo do formulário</h1>
    <hr>
    <?php
    // Recebendo os dados via metodo POST 
    // usando o array superglobal $_POST []
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $mensagem = $_POST["mensagem"];

    if (empty($nome) || empty($email)) { ?>

        <p>Você deve preencher nome e e-mail!</p>

    <?php

    } else {

    ?>
        <h2>Dados Recebidos:</h2>
        <ul>

            <li>Nome:<?= $nome ?></li>
            <li>E-mail:<?= $email ?></li>

            <?php if (!empty($nascimento)) { ?>

                <!-- Se nascimento NÃO ESTIVER VAZIO-->
                <li>Data de Nascimento : <?= $nascimento ?></li>
            <?php } ?>
            <!-- Se mensagem NÃO ESTIVER VAZIO-->
            <?php if (!empty($mensagem)) { ?>
                <li>Mensagem: <?= $mensagem ?></li>
            <?php } ?>

        </ul>
    <?php } ?>

</body>

</html>