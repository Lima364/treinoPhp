<?php
/* ela irá recebe o nome da função que será chamada
criando o autoload para usar os namespace */

spl_autoload_register(function($nameClass)
{
    var_dump($nameClass);
    /* dizer onde iremos procurar as classes */
    $dirClass = "class";
    $filename = $dirClass .DIRECTORY_SEPARATOR.$nameClass.".php";
    
    // if (file_exists($filename)===true) esta função 'file_exists' retorna true 
    // então não tem necessidade do '===true' neste primeiro 'if'
    if (file_exists($filename))
    {
        require_once($filename);
    }

});