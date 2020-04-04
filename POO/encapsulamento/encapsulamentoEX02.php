<?php

class Pessoa
{ // vamos usar os tres modificadores de acesso ou - encapsulamento
    public $nome = "Ramus Lerdorf";
    /* o protected só pode ser acessado dentro da própria classe por métodos que estejam aqui
    ou quem herda desta classe*/
    protected $idade = 48;
    /* o private é como se fosse um nível acima do protect em termos de segurança
      e nem mesmo os herdeiros irão conseguir acessar, somente na classe
     */
    private $senha = "123456";

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha;
    }

}

/* criando uma classe extendida - esta classe 'Programador' irá extender - obter tudo que vem da 
classe 'Pessoa' exceto atributos ou métodos private*/
class Programador extends Pessoa 
{
    public function verDados()
    {
        /* para identificar de qual classe está vindo esta informação */
        echo get_class($this). "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha;
    }

}
/* mudamos a instancia e está instanciado a classe 'Programador'. Dentro da classe 'Programador' não
há um método 'verDados' mas ela extende da classe  "Pessoa" que tem o método 'verDados' que é
'public'. com o 'extends' ele herda os atributos e métodos da classe pai.*/ 
$objeto = new Programador();
/* mas não consegue ver o atributo senha pq está private e rodando o 'verDados' da classe filho
temos a mensagem de erro - Undefined property: Programador::$senha in - por estar tentando acessar
este atributo de fora da classe pai */

// echo $objeto->nome . "<br>";

$objeto->verDados(); 
