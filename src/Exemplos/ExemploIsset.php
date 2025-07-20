<?php
/**
 * É acionado ao utilizar isset() ou empty() em propriedades inacessíveis.
 * Ideal para controlar dinamicamente a existência de propriedades em estruturas internas.
 */
class ExemploIsset
{
    private $dados = ['nome' => 'João', 'idade' => 25];

    public function __isset($nome)
    {
        return isset($this->dados[$nome]);
    }
}

?>