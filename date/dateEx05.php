<?php

$dt = new DateTime();
// vamos somar 15 dias a esta data - com a variável $dt acessamos um método que 
// é "add" que serve pra adicionar uma data - ou subtrair com o método "sub".
// o parametro esperado dentro deste método é uma outra classe que guarda um intervalo
// um período, 
echo $dt->format("d/m/Y H:i:s");
echo "<br>";
// no método construtor() especifica este período - coloca-se o 'P' qual a quantidade
//de dias que se quer '15' e 'D" de dias. criando o objeto $período
// passo o soma pra mim no $dt que é uma variável DateTime a variável $período
$periodo = new DateInterval("P15D");
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

// o $dt é um objeto que instancia uma classe
