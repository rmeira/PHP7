<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 7</title>
</head>
<body>
    <!-- Exemplo de include -->
    <?php include('./includes/header.php'); ?>

    <!-- Require é para importar o valor no codigo, mas se houver erro ele da erro e não deixa a aplicação rodar  -->
    <!-- <?php require('./includes/header.php'); ?> -->

    <div>
        Olá sou o conteudo do site
    </div>
    
    <!-- Include_once é utilizado para incluir apenas uma unica vez -->
    <?php include_once('./includes/footer.php'); ?>
    <!-- <?php require_once('./includes/footer.php'); ?> -->

</body>
</html>

<?php

