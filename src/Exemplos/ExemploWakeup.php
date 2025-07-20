<?php
/**
 * Chamado automaticamente quando um objeto é desserializado.
 * Ideal para restaurar conexões, recursos ou reforçar consistências após o objeto voltar à execução.
 */
class ExemploWakeup
{
    public $data;

    public function __wakeup()
    {
        // Reabrir conexões, alocar recursos, etc.
        // Exemplo: $this->db = new PDO(...);
    }
}
?>