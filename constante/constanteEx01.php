<?php
// constantes - são variáveis que contem valores que não mudam naquela página
// usada qd voce não precisa alterar o valor dela. Para cria-la usa-se a constante
// 'define' - 'defined' é pra saber se ela foi criada. Após criá-la é necessário determinar
// se é case sensitive ou não.

// criando com a função 'define'. Precisa passar dois parametros pra esta função:
// primeiro o nome da constante E segundo o nome.
// Normalmente se usa o nome da constante com letra maiuscula
define("SERVIDOR", '127.0.0.1');
echo SERVIDOR;


