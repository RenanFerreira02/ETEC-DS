<?php


$nota[0] = 8;
$nota[1] = 2;
$nota[2] = 9;
$nota[3] = 1;

$tamanhoVetor = count($nota);

$media = array_sum($nota) / $tamanhoVetor;

echo $media;

?>
