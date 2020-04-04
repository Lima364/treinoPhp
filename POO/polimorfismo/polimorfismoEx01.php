<?php

/* Polimorfismo = ter muitas formas - qd métodos com mesmo nome em classes diferentes
- classe herdadas - tem comportamentos diferentes. */

abstract class Animal
{
    public function falar()
    {
        return "Som";
    }

    public function mover()
    {
        return "Andar";
    }
}

class Cachorro extends Animal
{
    /* faremos o polimorfismo do método falar - foi mudado o comportamento do
    método falar*/
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Miau";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }
/* Vamos concatenar também com o comportamento de mover da classe 
abstrata animal que é a classe raiz - que é o pai - vamos fazer, 
além de fazer o comportamento que está sobrescrevendo para chamar a classe pai
Usa-se uma palavra reservada 'parent' este 'voa' se refere a classe que está 
instanciada e o 'parent' se refere a classe pai. */
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar();
echo "<br>";
echo $pluto->mover();
echo "<br>";
echo "================================================<br>";
echo "<br>";

$garfield = new Gato();

echo $garfield->falar();
echo "<br>";
echo $garfield->mover();
echo "<br>";

echo "<br>";
echo "================================================<br>";
echo "<br>";

$piupiu = new Passaro();

echo $piupiu->falar();
echo "<br>";
echo $piupiu->mover();
echo "<br>";
