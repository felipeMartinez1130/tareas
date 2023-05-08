<?php
echo " Bienvenido \n";
echo " Elija una de las siguientes opciones: \n 1. Area de un cuadrado.\n 2. Area de un rectangulo.\n 3. Area de un triangulo.\n 4. Area de un circulo.\n 5. Area de un rombo.\n 6. Area de un trapecio.\n";
$opcion = readline("Opcion #:");
$op1 = 1;
$op2 = 2;
$op3 = 3;
$op4 = 4;
$op5 = 5;
$op6 = 6;

switch ($opcion){
    case $op1:
        echo "Ha elegido la opcion #1: Area de un cuadrado.\n";
        $a = readline ("Ingrese el valor del lado: ");
        $area = $a*2;
        echo "El area del cuadrado es: $area.";
        break;
    case $op2:
        echo "Ha elegido la opcion #2: Area de un rectangulo.\n";
        $a = readline("Ingrese el valor de a: ");
        $b = readline("Ingrese el valor de b: ");
        $area = $a*$b;
        echo "El area del rectangulo es $area.";
        break;
    case $op3:
        echo "Ha elegido la opcion #3: Area de un triangulo.\n";
        $a = readline("Ingrese el valor de a:");
        $h = readline("Ingrese el valor de h:");
        $area = ($a*$h)/2;
        echo "EL area del triangulo es: $area.";
        break;
    case $op4:
        echo "Ha elegido la opcion #4: Area de un circulo.\n";
        $pi = 3.14;
        $r = readline("Ingrese el valor de r: ");
        $area = ($pi*$r)**2;
        echo "El area del circulo es $area.";
        break;
    case $op5:
        echo "Ha elegido la opcion #5: Area de un rombo.\n";
        $a = readline("Ingrese el valor de a:");
        $b = readline("Ingrese el valor de b:");
        $c = readline("Ingrese el valor de c:");
        $d = readline("Ingrese el valor de d:");
        $area = (($a*$c)*($b*$d))/2;
        echo "El area del rombo es: $area.";
        break;
    case $op6:
        echo "Ha elegido la opcion #6: Area de un trapecio.\n";
        $a = readline("Ingrese el valor de a:");
        $b = readline("Ingrese el valor de b:");
        $h = readline("Ingrese el valor de h:");
        $area = (($a+$b)/2)*$h;
        echo "El area del trapecio es: $area.";
        break;    
}
?>