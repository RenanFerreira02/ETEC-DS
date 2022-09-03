<?php

$i = 0;

while ($i <= 10) {
    echo "Exemplo laço While: $i <br />";
    $i++;
}

echo "<br />";

for ($j = 0; $j <= 10; $j++) {
    echo "Exemplo laço for com incremento: $j <br />";
}

echo "<br / >";

$k = 0;

do {
    echo "Exemplo com laço do while $k <br />";
    $k++;
} while ($k <= 10);

echo "<br / >";

for ($j = 10; $j >= 0; $j--) {
    echo "Exemplo laço for com decremento: $j <br />";
}

echo "<br / >";
$nome = array();
$nome[0] = "Ana";
$nome[1] = "Bruno";
$nome[2] = "Zelia";
$nome[3] = "Daniel";
$nome[4] = "Carlos";
$nome[5] = "Carlos";
$nome[6] = "Carlos";
$nome[7] = "Carlos";

echo "Tamanho: " . count($nome) . "<br />";

for ($i = 0; $i < count($nome); $i++) {
    echo "$nome[$i] <br / >";
}

?>
