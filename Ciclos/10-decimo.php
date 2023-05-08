<?php
$n = 5;
$i = 1;

while ($i <= $n) {
    $j = 1;
    while ($j <= $n) { 
        if ($i == 1 or $i == $n or $j == ($n - $i + 1)) {
            echo "*";
        } else {
            echo " ";
        }
        $j++;
    }
    echo "\n";
    $i++;
}
?>
