<?php
// estudo sobre estrutura de controle de fluxo do usuário, ou tambem,
// comandos de decisão

// Existe o 'while' e o 'do while'. while significa faça enquanto - exemplo de uso: pegar
// dados do BD. a diferença entre o 'while' e o 'do while' é que o 'do while' executa ao menos uma vez.
// 'while' é diferente de 'for' e de 'foreach' pq nestes dois eu tenho valor inicial, valor final
// e valor incremental e uso pra arrays e coleções - já o 'while' eu uso pra qq assunto.
// criamos uma condição que será 'true' para iniciar o laço posso executar pra qq coisa desde
// que a condição seja sempre verdadeira
$condicao = true;

while ($condicao) {
    $numero = rand(1, 10);
    if ($numero === 3){
        echo "TRES !!!!!";
        $condicao = false;
    }
echo $numero . "<br>";
}

