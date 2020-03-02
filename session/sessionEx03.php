<?php
// id de sessão é a identificação de sua sessão única no servidor; este id é dado pelo servidor
// para cada usuário
require_once("sessionConfig.php");

echo session_id();
