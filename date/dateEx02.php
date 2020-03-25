<?php
// identificação de data - exemplo 11/11
$ts = strtotime("2001-09-11");
echo "<br>";

// o timestamp pode ser usada no função date 
// usando o 'l' para dia de semana
echo date("l, d/m/Y", $ts);
echo "<br>";

// strtotime aceita expressão
$ts1 = strtotime("now");
echo $ts1;
echo "<br>";