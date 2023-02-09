<?php
    $i = 0;
    while($i<=10){
        echo "Exemplo laço while: $i <br />";
        $i++;
    }
    //--------------------------------------------------------
    echo "<br />";
    for($j=0;$j<=10;$j++){
        echo "Exemplo laço for com incremento: $j <br />";
    }

    //--------------------------------------------------------

    echo "<br />";
    for($j=10;$j>=0;$j--){
        echo "Exemplo laço for com decremento: $j <br />";
    }

    //--------------------------------------------------------

    echo "<br />";
    $k=0; 
    do{
        echo "Exemplo com laço do while $k <br />";
        $k++;
    }while($k<=10);

    //--------------------------------------------------------
    echo "<br />";
    $nome = array();
    $nome[0] = "Ana";
    $nome[1] = "Bruno";
    $nome[2] = "Zélia";
    $nome[3] = "Daniel";
    $nome[4] = "Carlos";
    $nome[5] = "qqqCarlos";
    $nome[6] = "eeeCarlos";
    $nome[7] = "ddCarlos";
    $nome[8] = "ddCarlos";
    $nome[9] = "ddCarlos";

    $idade = array();
    $idade[0] = 20;
    $idade[1] = 209;
    $idade[2] = 205;
    $idade[3] = 204;
    $idade[4] = 203;
    $idade[5] = 201;
    $idade[6] = 202;
    $idade[7] = 2021;
    $idade[8] = 203;
    $idade[9] = 204;
    


    echo "Tamanho: " . count($nome);


    for($i=0;$i<count($nome);$i++){
        echo "$nome[$i] $idade[$i] <br />";
    }
?>