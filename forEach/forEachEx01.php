<?php
// estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão
// 'foreach' é um laço para percorrer arrays e coleções

$meses = array(
    'janeiro', 'fevereiro', 'março',
    'abril', 'maio', 'junho',
    'julho','agosto','setembro',
    'outubro','novembro','dezembro');

    // no foreach a primeira seleção é o nome da variável array - 
    // esta leitura foi simples
foreach ($meses as $mes) {
    echo "o mes é: ".$mes. "<br>";
}    

// posso tambem saber em que posição array está. 
foreach ($meses as $index => $mes) {
    echo "Índice: ".$index."<br>";
    echo "o mes é: ".$mes. "<br><br>";
}    


