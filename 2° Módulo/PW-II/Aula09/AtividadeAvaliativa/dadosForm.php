<?php
    include('cabecalho.php');


    echo "Palavra inserida: <br />";

    echo "<br />";

    $palavra = $_POST['txtPalavra'];
    $descricao = $_POST['txtDescricao'];
    $imagem = $_POST['image'];
    $link = $_POST['txtLink'];

    echo " $palavra <br /> $descricao <br /> <img src='$imagem'/> <br /> $link";

    include('rodape.php');
?>