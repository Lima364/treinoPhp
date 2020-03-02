<?php
// Json - Java Script Object Notation - é um formato de arquivo de comunicação que facilita
// a integração de sistemas - interoperabilidade -
// função nativa do php chama-se json incode que pega um array e transforma em um json
// e tambem um contrario - jason decode

$pessoas = array();
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

print_r($pessoas[0]);
echo "<br>";

print_r($pessoas[0]['nome']);
echo "<br>";

echo json_encode($pessoas);
