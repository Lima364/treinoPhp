<?php
// ordem de execução dos operadores - precedência de operador

$resultado = 10 + 3 / 2;
echo ($resultado);
echo "<br>";

$resultado = (10 + 3) / 2;
echo ($resultado);
echo "<br>";

// exemplo de operador lógico - na operação de comparação só se usa o var_dump
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump ($resultado);
echo "<br>";

// || equivale ao OR
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump ($resultado);
echo "<br>";






?>