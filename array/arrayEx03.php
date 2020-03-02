<?php
$pessoas = array();
// vamos usar uma função de array pra criar um item neste array que já está criado
// Push elements onto the end of array
// ele espera o nome do array em que voce irá fazer a inserção e será adicionado um 
// outro array pq quero falar alguns dados desta pessoa. Ex. nome e idade
array_push($pessoas, array(
    "nome"=>"João",
    "idade"=>20
));

array_push($pessoas, array(
    "nome"=>"Glaucio",
    "idade"=>25
));

print_r($pessoas);
echo "<br>";

// resultado = Array ( [0] => Array ( [nome] => João [idade] => 20 ) [1] => Array ( [nome] => Glaucio [idade] => 25 ) )
// mesmo resultado com ctrl+U -
//  Array
// (
//     [0] => Array
//         (
//             [nome] => João
//             [idade] => 20
//         )

//     [1] => Array
//         (
//             [nome] => Glaucio
//             [idade] => 25
//         )

// )

// Existe um primeiro array e dentro deste array se tem mais dois itens - 0 e 1 e nestes
// itens mais um array e dentro deste outro tem chave e valor
// pode-se pedir tambem de onde se quer a informação
print_r($pessoas[0]);
echo "<br>";

// neste outro ex. eu quero o nome
print_r($pessoas[0]['nome']);

