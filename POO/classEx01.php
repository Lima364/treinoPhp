<?php
// estrutura de uma classe - usa-se a palavra reservada 'class' e coloca-se o nome
//da classe de acordo com sua convenção - começa com letra maiuscula e se for um nome 
// composto, todo inicio de palavra tambem será com letra maiuscula - ex: classe nativa
// DateTime. 

// criando uma classe 'Pessoa' colocando-se chaves - isto é a criação de uma classe

class Pessoa {
// aqui dentro irão as variáveis e funções - que são os atributos e métodos 
// variáveis = atributos / funções = métodos
// toda pessoa tem, por exemplo, nome - então se cria um atributo nome - pra isso será usado
// o primeiro encapsulamento 'public'-que é uma palavra reservada
public $nome; // public $nome; - aqui estou criando um atributo

// criaremos a nossa primeira função - ação - uma pessoa ela fala
public function falar(){ // este é o método pq é uma função dentro de uma classe e pq ganha
                        //este encapsulamento - que tipo de recurso ele tem - neste caso 'public'
    // dentro deste método tem uma variável '$this' - ela é a representação da classe já 
    //instanciada, ou seja, o objeto.
    return "O meu nome é: ".$this->nome;
}


}

// public $nome; - aqui está descrito '$nome' pq ele está dentro da classe mas está fora de algum
// método. Mas quando fizer referencia a este cara em qq um dos métodos se escreve obrigatoriamente
// '$this->nome' sem o '$'. - ela serve pra isto, referenciar atributos e métodos dentro de outros
// métodos 


// como fazer isso funcionar: fora da classe, vamos criar uma pessoa
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";  //'->' referencia a um atributo - neste caso public 
//pode-se falar pro objeto '$glaucio' falar
echo $glaucio->falar();