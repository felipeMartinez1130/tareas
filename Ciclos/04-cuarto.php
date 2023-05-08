<?php
//4.Escribe un programa para leer 10 números del teclado y encontrar su suma y promedio.

$s = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "Introduce el número $i: ";
    $num = readline(" ");
    $s =$s+ $num;
  }


$promedio = $s / 10;

echo "La suma de los números es: $s";
echo "El promedio de los números es: $promedio";