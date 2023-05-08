<?php
//10.Leer el número de llantas de una compra y mostrar el valor que debe pagarse. El almacén las vende con la siguiente política: 
//Si se compran menos de 6 llantas, el precio unitario es $240000. Si se compran 6 o 7, el precio unitario es $221000, y si se compran más de 7 llantas, el precio unitario es $180000.
//ok
$n1 = readline("Digite el numero de llantas a comprar = ");

if( $n1==6 || $n1==7){
$r1=$n1*221000;
echo "el valor a pagar por las llantas es de = $r1 ";
}
elseif($n1<6){
    $r2=$n1*240000;
    echo "el valor a pagar por las llantas es de = $r2 ";
    }
if($n1>7){
        $r3=$n1*180000;
        echo "el valor a pagar por las llantas es de = $r3 ";
        }

?>