<?php
/**
 * É chamado ao clonar um objeto. Permite ajustar propriedades,
 * reiniciar recursos ou modificar o clone antes de ele ser retornado.
 */
class ExemploClone
{
    public $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function __clone()
    {
        $this->valor .= " (Clonado)";
    }
}
?>