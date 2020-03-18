<?php
// funcao de forma mais aprofundada - função definida pelo usuário
// qd se tem uma regra de negócio específica que se irá utilizar várias vezes
// ex: calcular o aumento de salarial de um vendedor - quanto mais vende maior
// fica o salário dele.
// ela recebe um parâmetro - que é a informação que a função precisa pra funcionar
//

function ola(){
    echo "olá mundo <br>";
}

// para chamar esta função 
ola();
ola();

// se substituir o 'echo' na função por um return, então o 'echo' tem de ser
// colocado na chamada da função

function ola1(){
    return 'olá mundo <br>';
}

echo ola1();

$frase = ola1();
echo strlen($frase);