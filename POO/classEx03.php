<?php

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $resultado = Documento::validarCpf($numero);
        if ($resultado === false){
            throw new Exception("CPF informado não é válido", 1);
            
        }
        $this->numero = $numero;

    }
    // Declarar propriedades ou métodos de uma classe como estáticos faz 
    // deles acessíveis sem a necessidade de instanciar a classe. 
    // vou setar para ter como retorno o ':bool para identificar true ou false
    public static function validarCpf($cpf): bool
    {
        // verifica se um número foi informado retornando false ou true
        if (empty($cpf)) {
            return false;
        }

        // elimina possível máscara
        $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        /* verifica se o número de dígitos informado é igual a 11 */
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }

        // Verifica se nenhuma das sequencias inválidas abaixo foi digitada
        // Caso afirmativo - retorna falso
        else if (
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'
        ) {
            return false;

            //Calcula o dígito verificador para identificar se o cpf é válido

        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{
                        $c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{
                    $c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
}
/*
$cpf = new Documento();
$cpf->setNumero("19472852033");

var_dump($cpf->getNumero());
*/

// dar um var_dump sem instanciar a classe
var_dump(Documento::validarCpf("19472852033"));