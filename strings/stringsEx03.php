<?php
// realizar troca de letras dentro da string

$empresa = "HCode";
echo $empresa;
echo "<br>";

// primeiro parametro informa o que vou trocar e o segundo indica pelo que eu irei trocar
$empresa1 = str_replace("o","0","$empresa");
$empresa2 = str_replace("e","3","$empresa1");

echo $empresa1;
echo "<br>";

echo $empresa2;
echo "<br>";





?>