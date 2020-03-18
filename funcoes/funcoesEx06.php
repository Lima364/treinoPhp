<?php

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);
// com o & antes da variavel estou avisando que valor virá por referencia
foreach($pessoa as &$value){
    if (gettype($value) === 'integer') $value += 10; // gettype - retorna o tipo de dado da minha variavel
    echo $value . "<br>";
}

print_r($pessoa);

// resultado usando o &$value
// João
// 30
// Array ( [nome] => João [idade] => 30 )

// resultado sem usar o '&' no $value
// João
// 30
// Array ( [nome] => João [idade] => 20 )

