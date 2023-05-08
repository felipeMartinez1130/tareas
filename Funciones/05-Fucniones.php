<?php
function fibonacci(){
$n = readline("Ingresa el número de términos a mostrar: ");

$a = 0;
$b = 1;
$suma = 0;
$i = 0;
while ($i < $n) {
    $suma += $a;
    $temp = $a;
    $a = $b;
    $b = $temp + $b;
    echo "$a ";
    $i++;
  }
}
echo fibonacci();

?>