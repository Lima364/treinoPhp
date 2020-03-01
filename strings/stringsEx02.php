<?php
// transformar a string para maiúsculo, ela toda
$nome = "joão rangel";
echo $nome;
echo "<br>";
// transforma tudo pra maiúsculo 
$nomeMa = strtoupper($nome);
echo $nomeMa;
echo "<br>";

// transforma tudo pra minúsculo
$nomeMi = strtolower($nomeMa);
echo $nomeMi;
echo "<br>";

// transforma a primeira letra de todos os nomes pra maiúsculo
$nome = ucwords($nome);
echo $nome;
echo "<br>";


// transforma a primeira letra do primeiro nome pra maiúsculo
$nome = "joão rangel";
$nome = ucfirst($nome);
echo $nome;
echo "<br>";





?>