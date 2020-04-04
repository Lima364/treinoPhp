<?php
/*criando a 'interface' e dando um nome */
interface Veiculo
{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}
/* esta classe implementa -'implements' - a interface veiculo */
class Civic implements Veiculo
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

$carro = new Civic();

$carro->trocarMarcha(1);