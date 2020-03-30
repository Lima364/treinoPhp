<?php

// criação da classe Carro - sempre com maiuscula
class Carro
{
    // criando os atributos como private - isto é o mais normal - isto permite maior controle e segurança
    // ele protege o atributo ou o método

    private $modelo;
    private $motor;
    private $ano;

    // usando nos métodos 'get' e 'set' 
    public function getModelo()
    {
        return $this->modelo;
        echo $this->modelo;
    }

    public function setModelo($modelo)
    {
        // aqui, coloca o valor que estou recebendo na função pelo parametro '$modelo" lá 
        // no atributo da classe que está lá em cima 'private $modelo'

        $this->modelo = $modelo;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    // public function getAno()
    public function getAno(): int //posso mudar o tipo do atributo que estou recebendo,
    // neste caso estou recebendo uma string e mudando pra um inteiro

    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

// agora instanciando a classe carro

// $gol = new Carro();
// $gol->setModelo("Gol Gt");
// $gol->setMotor("1.6");
// $gol->setAno("2017");

$carro = new Carro();
$carro->setModelo("Gurgel Gt");
$carro->setMotor("1.4");
$carro->setAno("1985");

// aqui ele irá retornar o array do metodo exibir
// print_r($gol->exibir());
// echo "<br>";
// var_dump($gol->exibir());
print_r($carro->exibir());
echo "<br>";
var_dump($carro->exibir());