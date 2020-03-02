<?php
// vamos entender o que são arrays, como eles funcionam. vamos entender algumas funções
// pra array, como cria array e algumas lógicas ou conceitos.

// criando um array simples com a função 'array' que é a mais fácil
$frutas = array("laranja", "abacaxi", "melancia" );
print_r($frutas);
echo "<br>";
// comando novo - 'print_r' para array - exibi o array e sua estrutura
// todo array inicia em zero 
// quando o array tem uma só dimensão ele é chamado de vetor

// exemplo de uma array bi-dimensional

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";

// usando a função 'end' pra saber qual a última posição do array e quero saber qual o 
// ultimo carro que tenho na ford - esta função tras o último

echo end($carros[1]);
