<?php
/**
 * É usado quando um objeto precisa ser tratado como string,
 * por exemplo, ao usar echo para imprimir o objeto. Ideal para representar
 * objetos textual.
 */
class ExemploToString
{
    private $descricao;

    public function __construct($descricao)
    {
        $this->descricao = $descricao;
    }

    public function __toString()
    {
        return "Descrição do objeto: " . $this->descricao;
    }
}
?>