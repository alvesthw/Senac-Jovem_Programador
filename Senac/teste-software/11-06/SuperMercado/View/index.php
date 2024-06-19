<?php
    // AQUI estão outras formas de pegar o bagulho de aquivos diferentes ps: nao funcionou nesse caso
    // require_once './Control/Pessoa.php';
    // require_once './Control/Produto.php';
    // include './Control/Pessoa.php';
    // include './Control/Produto.php';
    
    //essa é a forma certa do bagulho entender que eu to querendo as classes que estao em outra pasta
    include (__DIR__ . '/../Control/Pessoa.php');
    include (__DIR__ . '/../Control/Produto.php');
    include (__DIR__ . '/../Control/Login.php');

    $antonio = new Pessoa("Antônio dos Santos", 25, "456333456-20");

    $antonio->falar();

    $antonioLogin = new Login("teste@gmail", "12345");
    echo "<br>";
    $antonioLogin->logar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Super Mercado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
