<?php
$n = 4;
$num = 1;
$i = 1;


while ($i <= $n) {
   
    $j = 1;
    while ($j <= $n - $i) {
        echo " ";
        $j++;
    }
    
    $j = 1;
    while ($j <= $i) {
        echo $num . " ";
        $num++;
        $j++;
    }

    echo "\n";
    $i++;
}
?>
