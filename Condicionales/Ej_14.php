<?php

//Menú de opciones
echo "Ingrese una opcion  ";
echo "  1. Si es Mujer ";
echo "  2. Si es Hombre ";

$opcion = readline("  Opcion seleccionada: ");

$edad = readline(" Ingrese su edad: ");

switch ($opcion){
    case "1":  
        $pulsaciones1 = (220-$edad)/10;
        echo "pulsaciones mujer: $pulsaciones1";
    break;

    case "2":  
        $pulsaciones2 = (210-$edad)/10; 
        echo "pulsaciones hombre: $pulsaciones2";
    break;
   
}


?>
