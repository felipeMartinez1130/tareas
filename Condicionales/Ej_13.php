<?php

$peso = readline(" Ingrese su peso: ");
$estatura = readline(" Ingrese su estatura: "); 

$imc = $peso/($estatura*$estatura);
echo "su indice de masa corporal es: $imc";

if ($imc<18.5){  
    echo "  desnutrido";
}

else if ($imc>=18.5 and $imc<25) {
    echo "  normal";

}
else if ($imc>=25.0 && $imc<30){
    echo "   sobrepeso";
}
else if ($imc>=30 && $imc<35){
    echo "  obesidad grado 1";
}
else if ($imc>=35 && $imc<40){
    echo "  obesidad grado 2";
}
else if ($imc>=40.0){
    echo "  obesidad grado 3";
}
?>
