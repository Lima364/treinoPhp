<?php 
// criaremos uma contante que será um array - isto foi possível a partir do PHP 7
// 

define('BANCO_DE_DADOS',[
    "127.0.0.1",
    "root",
    "password",
    "testE"
]);

print_r(BANCO_DE_DADOS);

// Para torná-la case insensitive usa-se 'true' no final
define('BANCO_DE_DADOS1',[
    "127.0.0.1",
    "root",
    "password",
    "testE case insensitive"
], true);

print_r(BANCO_DE_DADOS1);

// print_r(Banco_de_Dados1);
// quando se usa um nome diferente do que foi criado ele reclama
