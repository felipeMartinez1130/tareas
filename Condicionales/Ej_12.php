<?php


$cantidad = readline(" Ingrese cantidad de articulos a llevar: ");
$valorartic = readline(" Ingrese valor articulos: "); 

$valortotal = $cantidad*$valorartic;

if ($cantidad <= 5){ 
    echo "el valor sin descuento es: $valortotal";
}
else if ($cantidad <= 10 ){  
    $descuento = $valortotal*0.05;
    $subtotal = $valortotal-$descuento;
    echo "el valor con descuento hasta 10 productos es: $subtotal";
    
}

else if ($cantidad  > 10){   
    $descuento = $valortotal*0.08;
    $subtotal = $valortotal-$descuento;
    echo "el valor con descuento mas de 10 productos: $subtotal";
 

}


?>
