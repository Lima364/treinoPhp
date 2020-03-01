<?php 
// procurando palavras em um texto
$frase = "a repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, "mãe");

var_dump($q);
echo "<br>";

// procurar um texto e recuperar do inicio até a posição que se quer
$texto = substr($frase, 0, $q);
var_dump($texto);
echo "<br>";

// procurar um texto e recuperar a partir da posição determinada - neste caso irá tirar a palavra mãe e irá
// até o final da frase 
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
echo "<br>";

// procurar um texto e recuperar com a palavra mãe incluida no texto
$texto3 = substr($frase, $q, strlen($frase));
var_dump($texto3);
echo "<br>";



 ?>
