<?php
/**
 * O __set é chamado ao atribuir um valor a uma propriedade inacessível ou inexistente.
 * O __get é chamado ao acessar uma propriedade inexistente/inacessível.
 * Ideal para implementar propriedades dinâmicas ou encapsular lógica de acesso.
 */
class ExemploGetSet
{
    private $dados = [];

    public function __set($nome, $valor)
    {
        echo "Setando '$nome' como '$valor'\n";
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        echo "|| Obtendo valor de '$nome'\n";
        return $this->dados[$nome] ?? null;
    }
}
?>