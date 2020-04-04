<?php

/* ao invés de usar 'require_once' para trazer as várias classes que precisamos
é possível usar uma função mágica '__autoload()'*/

function __autoload($nomeClasse)
{
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}
$carro = new DelRey();

$carro->acelerar(100);
