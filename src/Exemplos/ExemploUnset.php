<?php
/**
 * É chamado ao aplicar unset() em propriedades inacessíveis.
 * Permite implementar remoção controlada de dados internos.
 */
class ExemploUnset
{
    private $dados = ['nome' => 'Maria', 'idade' => 34];

    public function __unset($nome)
    {
        unset($this->dados[$nome]);
    }
}
?>