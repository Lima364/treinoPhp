<?php
/*// os tipos de dados - são oito tipos de dados primitivos divididos em tres grupos:
// tipos básicos: inteiro, string, ponto flutuante e booleano.
// tipos compostos: array e objeto.
// tipos especiais: resource e o null.*/

// tipos básicos de variável
$nome = "hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

// tipos compostos de variável
$frutas = array("abacaxi", "laranja", "manga");
// apresentar um valor de dentro do array - no caso aqui será manga
echo $frutas[2];
echo "<br />";

// o termo new aqui tem a ver com POO
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br />";

// tipos especiais de variável
$arquivo = fopen("variaveisEx01.php", "r");
var_dump($arquivo);
echo "<br />";

// variavel NULL é diferente de vazio. Null é ausência de valor e vazio ele foi iniciado só não tem valor
$nulo = null;
$vazio = "";




?>
