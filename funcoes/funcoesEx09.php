<?php

// funções recursivas ou trivil - quando uma função chama a si mesmo
// deve ser usada só em situações expecionais.

// criação de um array bidimensional - o primeiro é o array de objetos
$hierarquia= array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // inicio Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
               // inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
               // Término Gerente de Vendas
               )

            ),
            // término Diretor Comercial - término do array
            // inicio diretor financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
               // inicio Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            // inicio de supervisor
                            array(
                                'nome_cargo' => 'supervisor'
                            )
                            // término de supervisor
                        )
                            ),
               // Término Gerente de contas a pagar
               // Inicio Gerente de compras
                                array(
                                    'nome_cargo' => 'gerente de compras',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'supervisor de suprimentos'
                                        )
                                    )
                                )
               // término gerente de compras
            )
            //término diretor financeiro
            )
        ) 
    )
);

// cargos no plural neste caso significa que iremos receber um array de cargo
function exibe($cargos){
    // iremos abrir aqui um html a primeiro com sinal de igual e a segunda 
    // com .= para que vá acumulando valores
    $html = "<ul>";
    foreach ($cargos as $cargo) {
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>";
    }
    $html .= "</ul>";    

    return $html;
}

echo exibe($hierarquia);
