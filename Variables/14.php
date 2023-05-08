<?php

$km = 1000; // division
$cm = 100; //multiplicacion
$mm = 1000; //multiplicacion mm


$metros = readline ("Ingrese los metros-:");

$kilometros = $metros / $km;
$centimetos = $metros * $cm;
$milimetros = $metros * $mm;

echo " los metros en km son:",$kilometros;
echo "Km";

echo "============";

echo " los metros en centimetros son:",$centimetros;
echo "cm";

echo "=============";

echo " los metros en milimitros son:",$milimetros;
echo "mm";

?>