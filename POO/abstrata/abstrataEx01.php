<?php

/* a classe abstrata não pode ser instanciada é necessário uma segunda classe
para executar seus métodos e usar seus atributos*/

/*criando a 'interface' e dando um nome */
interface Veiculo
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}
/* esta classe implementa -'implements' veiculo */
/* qq Automovel implementa a classe veículo - precisa ter os mesmos métodos com 
os mesmos atributos - só que ninguem poderá instanciar Automóvel - vai ter de dizer
qual automóvel que é. E independente de qual seja, ele usará estes métodos já descritos */

abstract class Automovel implements Veiculo
{
     /* o método precisa ter o mesmo nome mas a variável não */
   public function acelerar($velocidade)
   {
        echo "O veículo acelerou até " .  $velocidade . " km/hr";
   }

   public function freiar($velocidade)
   {
        echo "O veículo freiou até " .  $velocidade . " km/hr";
   }

   public function trocarMarcha($marcha)
   {
    echo "O veículo engatou a marcha " .  $marcha;
   }

}

/* criando a classe extendendo da classe abstrata */
class DelRey extends Automovel
/* não poderia aqui tentar instanciar direto Automovel */
{
    public function empurrar()
    {

    }

}


$carro = new DelRey();

$carro->acelerar(200);

