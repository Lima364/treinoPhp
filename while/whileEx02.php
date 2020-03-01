<?php
// estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão

$total = 150;
$desconto = 0.9;
do {
    $total *= $desconto;
} while ($total > 100);
echo $total . "<br>";
