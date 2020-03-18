<?php
// tratar parametros de função - argumento - significa que são informações que uma
// função precisa para ele poder trabalhar corretamente.

function ola($texto){
    return "olá $texto!<br>";
}

echo ola("mundo");
echo ola("Glaucio");
echo ola("João");

function ola1($texto = "mundo"){
    return "olá $texto!<br>";
}

echo ola1();
echo ola1("Glaucio");
echo ola1("João");

// passando mais de um parametro - coloca a virgula

function ola2($texto = "mundo", $periodo = "bom dia"){
    return "olá $texto! $periodo <br>";
}

echo ola2();
echo ola2("Glaucio");
echo ola2("João");
