<?php
// operadores incrementais e decrementais

$a = 10;

// esta expressão está dizendo mostra o valor de a e depois soma mais um
echo ($a++);
echo "<br>";

echo ($a);
echo "<br>";

// aqui ele irá incrementar 1 antes de mostrar o valor que aqui neste exemplo será 12
// o primeiro exemplo ele mostrou a e depois acrescentou 1, no segundo já mostro a = 1
// pois já havia feito o acrescimo, e no terceiro exemplo ele acrescentou 1 e depois mostrou
echo (++$a);
echo "<br>";

// o mesmo acontece com '--' de forma contrária - aqui ele irá retirar 1 repetindo as posicões acima
echo (--$a);
echo "<br>";

?>