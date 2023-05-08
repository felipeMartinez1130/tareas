<?php
echo "Bienvenido \n";
echo "Elja una de las siguientes opciones: \n 1. Fahrenheit -> Celsius.\n 2. Fahrenheit -> Kelvin.\n 3. Celsius -> Fahrenheit.\n 4. Celsius -> Kelvin.\n 5. Kelvin -> Celsius.\n 6. Kelvin -> Fahrenheit.\n";
$opcion = readline("Opcion #:");
$op1 = 1;
$op2 = 2;
$op3 = 3;
$op4 = 4; 
$op5 = 5;
$op6 = 6;

switch ($opcion){
    case $op1:
        echo "Ha elegido la opcion #1: Fahrenheit -> Celsius\n";
        $f = readline("Ingrese la cantidad de grados Fahrenheit:");
        $c = ($f - 32)/1.8;
        echo "Celsius = $c";
        break;
    case $op2:
        echo "Ha elegido la opcion #2: Fahrenheit -> Kelvin\n";
        $f = readline("Ingrese la cantidad de grados Fahrenheit:");
        $k = ($f + 459.67)/1.8;
        echo "Kelvin= $k";
        break;
    case $op3:
        echo "Ha elegido la opcion #3: Celsius -> Fahrenheit\n";
        $c = readline("Ingrese la cantidad de grados Celsius:");
        $f = ($c*1.8)+32;
        echo "Fahrenheit = $f";
        break;
    case $op4:
        echo "Ha elegido la opcion #4: Celsius -> Kelvin\n";
        $c = readline("Ingrese la cantidad de grados Celsius:");
        $k = $c+273.15;
        echo "Kelvin = $k";
        break;
    case $op5:
        echo "Ha elegido la opcion #5: Kelvin -> Celsius\n";
        $k = readline("Ingrese la cantidad de grados Kelvin:");
        $c = $k - 273.15;
        echo "Celsius = $c";
        break;
    case $op6:
        echo "Ha elegido la opcion #6: Kelvin -> Fahrenheit\n";
        $k = readline("Ingrese la cantidad de grados Kelvin:");
        $f = $k*1.8 - 459.67;
        echo "Fahrenheit = $f";
        break;                      
}
?>