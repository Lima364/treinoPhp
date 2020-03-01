<?php

// estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão

// $qualASuaIdade = 30;
$qualASuaIdade = 10;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// if ($qualASuaIdade < $idadeCrianca) {
//     echo "Criança";
// } else {
//     echo "Não é Criança";
// }

// validando com 'elseif'.
// elseif junto ou else if separado funcionam do mesmo jeito. Não há diferença. 
// Mas para uma boa prática pode-se usar elseif quando não se está testando uma condição nova
// ou else if separado quando há uma nova condição sendo testada.
if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} elseif ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

// uso de operador ternário que pode ser usado direto. Isto se usa quando se tem uma condição
// simples. O "?" fica como primeira condição e ":" fica como else.
echo "<br>";
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";