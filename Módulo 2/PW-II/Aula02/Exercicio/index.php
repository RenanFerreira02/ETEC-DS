<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/style.css">
    <title>Document</title>
</head>
<body>
    
    <?php

    $nota1 = 5;
    $nota2 = 5;
    $nota3 = 8;
    $nota4 = 4;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    echo "Sua média é: $media";

    if ($media > 6) {
        echo "<h1 class='aprovado'>Aprovado</h1>";
    }
    else {
        echo"<h1 class='reprovado'>Reprovado</h1>";
    }


    ?>
</body>
</html>