<?php
// aprender o que são sessões e como criar variáveis de sessão.
// existe uma diferença entre variáveis locais e variáveis de sessão
// variável local so funciona na página onde foi criada ou qd recebidas pelo require
// e pelo include. As variáveis de sessão se assemelham as super globais, são enxergadas
// em todo código enquanto o usuário está on-line
// vamos aprende o básico de como programar as sessões.
require_once("sessionConfig.php");
// é preciso usar uma função para avisar que irá usar sessão
// session_start();
// vamos usar SESSION que funciona como um array superglobal
$_SESSION["nome"] = "Hcode";
// vamos criar um segundo arquivo

// id de sessão
