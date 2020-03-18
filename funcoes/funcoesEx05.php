<?php
// parametros por valor e referencia
$a = 10;

function trocaValor($a){
    $a += 50; // este += soma o valor inicial mais este valor de 50 
    return $a;
}
// variável é uma coisa e parametro de funçaõ é outra.
echo trocaValor($a) . "<br>";

echo $a . "<br>";

// pra fazer passagem de parametro por referencia coloca-se um '&' ao lado '$' na variavel
function trocaValor1(&$a){
    $a += 50; // este += soma o valor inicial mais este valor de 50 
    return $a;
}

echo trocaValor1($a) . "<br>";

echo $a . "<br>";
