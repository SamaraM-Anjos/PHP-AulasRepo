<?php

function somar2 (int ...$numeros){
    // Solução simples 
    // return array_sum($numeros)

    $total = 0.0;
    foreach($numeros as $n){
        $total += $n;
    }
    return $total;
}

$numero1 = 25;
$numero2 = 20;

echo "<br>";
var_dump(somar2($numero1, $numero2, 38, 47, 26));


