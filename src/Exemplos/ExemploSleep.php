<?php
/**
 * É executado quando um objeto é serializado.
 * Deve retornar um array com os nomes das propriedades que serão realmente serializadas.
 * Útil para liberar ou preparar recursos antes da serialização.
 */
class ExemploSleep
{
    public $data = "informação";
    public $recurso;

    public function __sleep()
    {
        // Poderia aqui fechar/referenciar recursos não serializáveis
        return ['data'];
    }
}
?>