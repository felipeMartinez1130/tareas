<?php
//Menú de opciones
echo "Ingrese una opcion ";
echo "  1. pizza pequeña 15000 ";
echo "  2. pizza mediana 24000";
echo "  3. pizza grande 36000";
$opcion = readline("  Opcion seleccionada: ");

switch ($opcion){
    case "1":
        echo "pizza pequeña";
        $ingredientes = readline(" Ingrese los ingredientes: ");
        $valorpizpeq = 15000;
        $valortotal = $valorpizpeq*$ingredientes;
        echo "El valor total a pagar es: $valortotal";
        break;

    case "2":
        echo "pizza mediana";
        $ingredientes = readline(" Ingrese los ingredientes: ");
        $valorpizmed = 24000;
        $valortotal = $valorpizmed*$ingredientes;
        echo "El valor total a pagar es: $valortotal";
        break;


    case "3":
        echo "pizza grande";
        $ingredientes = readline(" Ingrese los ingredientes: ");
        $valorpizpgr = 36000;
        $valortotal = $valorpizgr*$ingredientes;
        echo "El valor total a pagar es: $valortotal";
        break;

        default:
        echo " Opción Invalida ";
        break;

    }

?>
