<?php
$nombre = readline("Ingrese su nombre: ");
$edad = readline("Ingrese su edad: ");

if ($edad >= 18){
    echo "Usted es mayor de edad";
} else if ($edad <0){
    echo "Ingrese una edad valida";
}else {
    echo "Usted es menor de edad";
}
?>