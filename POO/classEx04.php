<?php

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    // criação do método construtor que elimina a necessidade de gets e sets
    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        var_dump("DESTRUIR");
    }

    public function __toString()
    {
        return $this->logradouro.", " . $this->numero. ", ". $this->cidade;
    }

}

$meuEndereco = new Endereco("rua prestes maia", 123, "santos");

// var_dump($meuEndereco);
echo $meuEndereco;
/*pelo que entendi, ao encontrar o 'unset' ele irá buscar a função __desctruct() para executar
a limpeza*/ 
// unset($meuEndereco);

/* O método mágico __destruct() é executado quando a instância de nossa classe é finalizada. 
Podemos realizar qualquer ação que desejarmos nesse método. Geralmente usamos a função unset() 
nesse método para limpar a memória. Claro que isso não é uma regra, mas é muito usado */

