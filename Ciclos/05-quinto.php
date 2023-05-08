<?php
$numero = readline("Ingresa un número entero: ");
echo "↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ \n";
echo "Tabla de multiplicar de $numero: \n";
$i = 1;
do {
    $producto = $numero * $i;
    echo "-------------- \n";
    echo "| $numero x $i = $producto |\n";
    $i++;
} while ($i <= 10);
?>

