<?php
// funcao que pode receber vários parametros ou não

function ola($texto){
    $argumentos = func_get_args();
                    // esta função recupera todos os argumentos que foram passados pra esta função
                    //
 return $argumentos;
}

var_dump(ola("Bom dia"));
// echo ola("Glaucio");
// echo ola("João");    