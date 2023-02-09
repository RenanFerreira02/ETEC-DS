<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>

<body>
    <?php

    $imagemPais = array("Images/Brasil.png", "Images/Canada.png", "Images/Irlanda.png", "Images/Alemanha.png");

    $nomePais = array("Brasil", "Canadá", "Irlanda", "Alemanha");

    $continente = array("América do Sul", "América do Norte", "Europa", "Europa");

    for ($i = 0; $i < count($nomePais); $i++) {

        echo "<h1> $nomePais[$i] </h1>";
        echo "<img src='$imagemPais[$i]'/>";
        echo "<p> $continente[$i] </p>";
    }


    ?>
</body>

</html>