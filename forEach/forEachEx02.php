<!-- // estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão -->
<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>




<?php
// vamor percorre a superglobal $_GET e $Key que é será o nome dos inputs de todos os campos 
// que se tiver no formulario e o que for digitado em cada um destes campos virá no 'value'. 
if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do Campo: " . $key . "<br>";
        echo "Valor do Campo: " . $value . "<br>";
        echo "<hr>";
    }
}
