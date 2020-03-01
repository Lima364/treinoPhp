<?php
// estudo sobre estrutura de controle de fluxo do usuário

// com switch case - (parece com o if)tambem um operador de controle -
// voce já sabe qual a opção que virá, no caso do 'if' se tem muitas opções 
// desconhecidas. Não há comparativos, já se conhece de antemão a condição que 
// será testada.

// o exemplo será recuperar um dia de semana. O switch é composto pelos 'case' e tem 
// de colocar o 'break' após cada condição para que ele não continue executando.

// $diaDaSemana = date("w"); esta condição foi a usada anteriormente. 
// - abaixo condição inválida para testar o default
$diaDaSemana = 8;

echo $diaDaSemana;
echo "<br>";

switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        break;
    
        case 1:
            echo "Segunda";
            break;
    
            case 2:
                echo "Terça";
                break;
 
                case 3:
                    echo "Quarta";
                    break;

                    case 4:
                        echo "Quinta";
                        break;

                        case 5:
                            echo "Sexta";
                            break;

                            case 6:
                                echo "Sábado";
                                break;
// caso nenhuma condição seja satisfeita usa-se o comando 'default' para uma mensagem
// ou aviso de que nenhuma condição foi satisfeita.

                                default:
                                echo "Data Inválida";
                        
                    
                
            
        

}


