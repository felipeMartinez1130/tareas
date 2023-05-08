<?php
function volumenCilindro ($altura, $radio){
 // $radio = Sqrt($volumen/(3,1416 * $altura));
  $volumen = 3.1416 * $radio * $radio * $altura;
return $volumen;
  }

echo volumenCilindro(98, 14);
?>
