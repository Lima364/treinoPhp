<?php
// classe date time

//criar um objeto a partir de uma classe - a classe DateTime
// pra fazer a instancia de uma classe usa-se a palavra reservada "new" 
// e a classe "DateTime". método construtor utilizando-se os (). a apresentar
// $dt ela não é mais uma classe, é um objeto (uma instância desta classe)
// e para acessar o método usa-se o padrão "->". Acessar um método da classe "DateTime"
// este método em questão é o 'format' 
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

// o $dt é um objeto que instancia uma classe
