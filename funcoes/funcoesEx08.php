<?php

// declaração do tipo de retorno
// o tipo do retorno será colocado após os dois pontos e se coloca o tipo - irá
// fazer a conversão do tipo no retorno, pode ser float ou o tipo de dado que se
// queira.

function soma(int ...$valores):string{
    
    return array_sum($valores); //
}

echo var_dump(soma(2, 2)) . "<br>";

echo soma(25, 33) . "<br>";

echo soma(1.5, 3.2) . "<br>";
