<?php
/**
 * É executado quando se tenta invocar um método inacessível ou inexistente.
 * Muito útil para implementar APIs dinâmicas.
 */
class ExemploCall
{
    public function __call($nome, $argumentos)
    {
        echo "Chamou o método '$nome' com os argumentos: ";
        print_r($argumentos);
    }
}
?>