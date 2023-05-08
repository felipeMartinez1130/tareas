<?php
//Programa que permita a un usuario tomar una decisión del tipo de pago a usar. Si la cuenta es menor a $150000 pago en efectivo. Si no, si es de 
//$150000 hasta $300000 pago con el celular (dinero electrónico). Si es mayor a $300000 hasta $600000, pago con la tarjeta de débito. Caso contrario, pago con la tarjeta de crédito.

$cuenta = readline("Digite el valor de la cuenta");

if ($cuenta < 150000) {
  echo " Debe pagar en efectivo.\n Total a pagar : $cuenta";
} elseif ($cuenta >= 150000 && $cuenta <= 300000) {
  echo " Debe pagar con el celular (dinero electrónico). \n Total a pagar : $cuenta";
} elseif ($cuenta > 300000 && $cuenta <= 600000) {
  echo " Debe pagar con la tarjeta de débito. \n Total a pagar : $cuenta";
} else {
  echo " Debe pagar con la tarjeta de crédito. \n Total a pagar : $cuenta";
}
?>