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

$objeto = new Pessoa();
// atributo publico e aparece no echo
echo $objeto->nome . "<br>";
// atributo protected e dá erro na chamada - Cannot access protected property Pessoa::$idade 
// echo $objeto->idade . "<br>";
// atributo private e dá erro na chamada - Cannot access private property Pessoa::$senha
// echo $objeto->senha . "<br>";

$objeto->verDados(); // este objeto istá dentro da classe e apresentará protected e private
/*  chamar aqui o objeto e o método verDados acontecerá?  esse método já tem os echos lá dentro
então não precisamos colocar o echo aqui fora. Nota que esse método ele é público então a gente
 consegue chamar o método lá de fora do objeto, e dentro da própria Classe  gente tá chamando 
 o nome a idade e a senha que são: público protegido e privado - só que mesmo o privado, dentro 
 da própria classe, ele tem acesso acesso público, como foi dado um acesso público para o 
 método ver dados então esses dados tem que aparecer lá fora.Com o método público todos os dados
 aparecem.*/

