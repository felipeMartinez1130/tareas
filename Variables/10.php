<?php

$diasT = readline ( "Ingrese la cantidad de dias trabajados:");

$salario = 10000;

$pagosalario = $salario * $diasT;

$pension = $pagosalario * 0.10;
$salud = $pagosalario * 0.15;
// descuento pension y salud
$descuentopen = $pagosalario-$pension;
$descuentosal = $pagosalario-$salud;
// salario a pagar
$descuentops = $descuentopen+$descuentosal-$pagosalario;
//Imprimir
//echo "El salario a pagar es:",$salarioap;
echo " El salario a pagar al empleado es:",$descuentops;

?>