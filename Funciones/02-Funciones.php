<?php
function suma ($a, $b, $c, $d, $e){
  $resultado = $a + $b + $c + $d + $e;
  return $resultado;
}
$temporal = suma(2, 5, 1, 8, 10);
echo "EL resultado de la suma es : " . $temporal . "\n";
?>