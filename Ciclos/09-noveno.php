<?php
$num = readline("ingrese el numero que desea calcular el factorial: ");
$factorial = 1;
$i = $num;
do {
    $factorial *= $i;
    $i--;
} while ($i >= 1);
echo "El factorial de $num es: $factorial ";
?>
