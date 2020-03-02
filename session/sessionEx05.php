<?php
require_once("sessionConfig.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED;
        echo "as sessões estão desabilitadas";
        break;
    
        case PHP_SESSION_NONE;
        echo "as sessões estão habilitadas mas não existem";
        break;
    
        case PHP_SESSION_ACTIVE;
        echo "as sessões estão habilitadas e existem";
        break;

        default:
        echo "int is not equal to 0, 1 or 2";
}
