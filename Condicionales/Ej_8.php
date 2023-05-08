<?php

//8.Solicitar tres números al usuario e imprimirlos en orden ascendente y descendente. 
//att
$n1= readline(" Digite numero 1= ");
$n2= readline(" Digite numero 2= ");
$n3= readline(" Digite numero 3= ");

 //$mayor,$medio,$menor;
if($n1>$n2 && $n1 > $n3){
$mayor=$n1;
}else if ($n2>$n1 && $n2>$n3){
    $mayor=$n2;
}else{
    $mayor= $n3;
}

if($n1<$n2 && $n1 < $n3){
$menor=$n1;
}
else if($n2<$n1 && $n2<$n3){
$menor= $n2;
}
else{$menor=$n3;}

$medio = ($n1+$n2+$n3)-($mayor+$menor);
echo " Los numeros organizados en orden ascendente $menor,$medio,$mayor";
echo " Los numeros organizados en orden descendente $mayor,$medio,$menor";



?>