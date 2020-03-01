<?php
// estudo sobre estrutura de controle de fluxo do usuário
// laços de repetição - existe o 'for', o 'foreach' e o 'while'
// o 'for' ele é usado como um contador. Ele tem início e fim - tem uma taxa incremental
// ou decremental.

// como funciona? coloca-se a palavra reservada 'for', depois a condição - que é dividida em tres partes
// primeiro criar a variável que será o contador - de onde começa e até onde termina.
// no caso abaixo a variável será '$i';
// segundo - qual a duração do for - no caso será enquanto ele for < que 10.
// terceiro - fazer o acréscimo de 1 até que a condição seja extrapolada.

// neste primeiro exemplo o incremento é de um a um e ele printará até o 9
for ($i=0; $i < 10; $i++) { 
    echo $i . "<br>";
}

// aqui o exemplo tem um incremento de 5
for ($i=0; $i < 100; $i+=5) { 
    echo $i . "<br>";
    
}

// break e continue dentro do for - servem pra interromper a execução do laço 
// ou pular uma fase
// Suponhemos que do 200 até o 800 não precise aparecer na tela
for ($i=0; $i < 1000; $i+=5) { 
    if ($i > 200 && $i < 800) continue;
    if ($i === 900) break;
    echo $i . "<br>";
    
}


