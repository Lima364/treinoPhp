<?php
// dois tipos novos de operadores que são do php 7 - space ship
$a = 50;
$b = 35;
$c = 80;

// este operador traz o seguinte resultado: se $a for maior retorna 1; 
// se $a e $b forem iguais retorna 0; se $b for maior retorna -1
var_dump($a <=> $b);
echo "<br>";

var_dump($a <=> $c);
echo "<br>";


// operador de comparação / atribuição
$a = NULL;
$b = NULL;
$c = 10;

// mostra $a, mas se não existir mostra $b, mas se não existir mostra $c e assim sucessivamente
var_dump($a ?? $b ??$c);
echo "<br>";



?>

