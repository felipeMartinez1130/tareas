<?php
echo "Ingrese las 5 notas del curso de PHP \n";
$nota1 = readline("Ingrese la primera nota: ");
$nota2 = readline("Ingrese la segunda nota: ");
$nota3 = readline("Ingrese la tercera nota: ");
$nota4 = readline("Ingrese la cuarta nota: ");
$nota5 = readline("Ingrese la quinta nota: ");
$sumaNotas = $nota1+$nota2+$nota3+$nota4+$nota5;
$promNotas = $sumaNotas/5;
if($promNotas>=3.0){
    echo "Su nota es: $promNotas \n Usted aprobo el curso de PHP !Felicitaciones!";
}else{
    echo "Su nota es: $promNotas \n Usted reprobo el curso de PHP !Sigue intentandolo!";
}
?>