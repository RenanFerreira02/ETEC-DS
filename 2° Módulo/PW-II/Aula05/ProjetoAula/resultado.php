<?php

$n = $_POST['tx_numero'];

echo "$n <br />";

$i = 0;

while ($i <= 10) {

    echo "$n * $i = " . ($n * $i) . "<br />";

    $i++;
};
