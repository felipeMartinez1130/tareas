<?php
$n = readline("Ingresa el número de términos a mostrar: ");

$a = 0;
$b = 1;
$suma = 0;
$i = 0;
$c=0;
while ($i < $n) {
    echo "$a ";
    $suma += $a;
    $c = $a;
    $a = $b;
    $b = $c + $b;
    $i++;
}

echo "\nLa suma de los primeros $n términos de la secuencia de Fibonacci es: $suma";
?>

?>
