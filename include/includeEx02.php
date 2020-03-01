<?php
// estudo sobre estrutura de controle de fluxo do usuário

// aqui eu chamar a função somar do includeEx01.php 
// o php não conhece a função somar e por isso usaremos o include para 
// indicar onde está esta função para que possa ser utilizada aqui
// utilização de include e require.

// include "includeEx01.php";
require "includeEx01.php";

// boa pratica da execução do require ou include  é usar o require_once ou include_once para
// não haver a possibilidade de chamar a função mais de uma vez.

$resultado = somar(10, 25);

echo $resultado;

// o 'require' obriga que o arquivo - no caso o includeEX01.php - exista e que o arquivo esteja funcionado
// corretamente. Se ele não estiver funcionando ou não existir, o require gera um erro fatal.Ele para a 
// execução do código.

// o 'include' tenta funcionar mesmo que o arquivo não exista ou que esteja com algum tipo de problema
// ele tambem tem mais recursos. ELe busca o que foi solicitado tambem na pasta de configuração do php
// 