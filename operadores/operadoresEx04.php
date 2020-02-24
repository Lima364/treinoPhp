<?php
// operadores de comparação

$a = 30.0;
$b = 55;

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

// um igual só é operador de atribuição e aqui são dois igual ('==') esse é de comparação

// aqui ele atribuir o valor de b em a 
// var_dump($a = $b); 
// echo "<br>";

var_dump($a == $b);
echo "<br>";

// para comparar tipo / identidade 

var_dump($a === $b);
echo "<br>";

// diferente
var_dump($a != $b);
echo "<br>";

// validar o tipo de dado
var_dump($a !== $b);
echo "<br>";




?>