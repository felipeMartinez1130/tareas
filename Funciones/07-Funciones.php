<?php
function calcularIva($precioProducto, $iva = 10) {
  $ivaDecimal = $iva / 100; 
  $montoIVA = $precioProducto * $ivaDecimal; 
  return $montoIVA;
}
echo "El valor a pagar por el iva es de : " .calcularIva(50000, 16);
?>