<?php
// como, via programação, voce força seu usuário a iniciar uma nova sessão usando uma 
//função nativa do php
require_once("sessionConfig.php");

// isto gera novamente um id de sessão. Bom utiliza-lo na abertura de uma sessão de login 
// pq mesmo que ele já tenha um número de sessão reconhecido vc inicializa e impede que
// alguem use com motivos excusos
session_regenerate_id();
echo session_id();
echo "<br>";
var_dump($_SESSION);