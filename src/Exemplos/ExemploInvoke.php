<?php
/**
 * Permite que uma instância da classe seja chamada como uma função.
 * Ideal para functors ou encapsulamento de lógica de callable.
 */
class ExemploInvoke
{
    public function __invoke(...$argumentos)
    {
        echo "Objeto chamado como função com argumentos: " . implode(", ", $argumentos);
    }
}
?>