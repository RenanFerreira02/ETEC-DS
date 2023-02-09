<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <div>
            <ul>
                <li> <a href="index.php"> Home </a> </li>
                <li> <a href="produto.php"> Produto </a> </li>
                <li> <a href="quem-somos.php"> Quem Somos </a> </li>
            </ul>
        </div>
    </header>

    <?php

    $produto = $_POST['produto'];

    echo "$produto <br />";

    $valor = $_POST['valor'];

    echo "$valor <br />";

    $categoria = $_POST['categoria'];

    echo "$categoria <br />";

    ?>
</body>

</html>