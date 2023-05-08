<?php

//ROPA
$cantidadp= readline("Ingrese la cantidad de productos ");

$valorp1 = readline("ingrese valor producto uno");
$valorp2 = readline("ingrese valor producto dos");
$valorp3 = readline("ingrese valor producto tres");

//
$porcentaje = 0.16;
$suma = $valorp1+$valorp2+$valorp3;
$calculariva = $suma * $porcentaje;
$valortotal = $suma + $calculariva;
//
echo "La cantidad de productos es:",$cantidadp;
echo "---";
echo "El valor unitario del producto uno es:",$valorp1;
echo "---";
echo "El valor unitario del producto dos es:",$valorp2;
echo "---";
echo "El valor unitario del producto tres es:",$valorp3;
echo "---";
echo "El valor valor total mas iva es:",$valortotal;
echo "---";
echo "El valor total es:",$suma;
echo ".";

?>