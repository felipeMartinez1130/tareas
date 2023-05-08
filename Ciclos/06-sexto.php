<?php
$num_filas = 4;
$i = 1;
do {
    $j = 1;
    do {
        echo "*";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i++;
} while ($i <= $num_filas);

$i = $num_filas - 1;
do {
    $j = 1;
    do {
        echo "*";
        $j++;
    } while ($j <= $i + 1);
    echo "\n";
    $i--;
} while ($i >= 0);
?>

