// escopo de variável - significa até onde esta variável será enxergada - área de atuação.
<?php
$nome = "Glaucio";

function teste(){
    global $nome;
    echo $nome;
    echo "<br />";
}

function teste2(){
    $nome = "joão";
    echo $nome." agora no teste 2";
}

teste();
teste2();


?>
