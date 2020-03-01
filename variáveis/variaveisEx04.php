<?php
// Variáveis pré-definidas ou arrays super-globais - são variáveis internas do php que já vem 
// com alguns recursos. Existe de informações internas até informações do ambiente.
// Ex: usuário preenche um formulário e vamos resgatar estas informações

$nome = $_GET["a"];
var_dump($nome);
echo "<br/>";

// forma de captar valores na página. No final do endereço tem ? e as variáveis que se quer.
// ex:http://localhost/cursoPhp/treinoPhp/variaveisEx04.php?a=1234&b=4567
// tudo que vem por $_GET ou $_POST vem como string. Pode-se fazer a conversão para número exemplo abaixo

$nome = (int)$_GET["a"];
var_dump($nome);
echo "<br/>";

$nome = $_GET["b"];
var_dump($nome);
echo "<br/>";

$nome = (int)$_GET["b"];
var_dump($nome);
echo "<br/>";

// pegando o ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
var_dump($ip);
echo "<br/>";


$script = $_SERVER["SCRIPT_NAME"];
var_dump($script);
echo "<br/>";


?>