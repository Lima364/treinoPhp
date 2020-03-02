<?php

require_once("sessionConfig.php");

//session_unset apaga as variáveis de sessão - se o colchete estiver vazio ele apaga todas
session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

//outro comando para limpar as variáveis de sessão é
session_destroy();
// ele não só limpa como remove o usuário - o que não acontece com o session_unset