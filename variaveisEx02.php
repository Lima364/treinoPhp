<?php
// boas práticas para criação de nome de variável
// usar camelCase em nomes que façam sentido
// as variáveis são case sensitive

$anoNascimento = 1959;

$nomeCompleto = "Carlos Lima";

$nome = "Maria";
var_dump($anoNascimento); 
echo "<br/>";

var_dump($nomeCompleto);
echo "<br/>";

// caracteres especiais o único permitido é o underline '_'
// não pode começar com número ex: $1nome = "João"; - pode conter número no nome em outra posição 

$nome1 = "João";
echo $nome1;
echo "<br/>";

// limpando uma variável - pode ter mais de uma no comando separando-as por vírgula
unset($nome1);
echo "<br/>";

// usando isset com if para verificar se a variável existe para ser usada
if (isset($nome1)) {
    echo ($nome1);
}

$sobrenome = "Rangel";

// concatenação de variáveis
$nomeCompleto = $nome . " " . $sobrenome;
var_dump($nomeCompleto);
echo "<br/>";



?>