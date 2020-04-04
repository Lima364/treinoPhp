<?php

class Documento
{
    private $numero;
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

/* extends é a palavra chave que indica que esta classe é filha de outra classe */

class Cpf extends Documento
{
    public function validar():bool /* devolverá um booleano*/
    {
    $numeroCpf = $this->getNumero();
    /* validação do CPF */

    return true;
    }
}

$doc = new Cpf();

$doc->setNumero("12345678912");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

/* Explicando o código:
O atributo é $numero.

O $doc->setNumero("12345678912"); chama o método setNumero($n) pelo objeto $doc.

No método setNumero, o $this->numero vai alterar o valor de private $numero para 
 valor de $n (que agora é 12345678912).

Feito isso, o valor de private $numero = 12345678912

Quando se chama o $doc->getNumero(), ele retorna o valor de numero (return $this->numero).