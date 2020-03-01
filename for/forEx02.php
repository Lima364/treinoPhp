<?php
// estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão
// vamos montar um combo. Um exemplo de utilidade do for

// pegando os últimos 100 anos
// for ($i=date("Y"); $i >= date("y")-100; $i--) { 
//     echo $i."<br>";
// }

// fazendo um select com html no código php
echo "<select>";

for ($i=date("Y"); $i >= date("y")-100; $i--) { 
    echo '<option value="'.$i.'">'.$i.'</option>';
}




echo "</select>";
