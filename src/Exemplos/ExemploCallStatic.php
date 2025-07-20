<?php
/**
 * É invocado quando um método estático inacessível ou inexistente é chamado.
 * Ideal para delegar funcionalidades, implementar métodos dinâmicos ou prover APIs flexíveis.
 */
class ExemploCallStatic
{
    private static $metodos = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'length' => 'strlen',
    ];

    public static function __callStatic($nome, $argumentos)
    {
        if (!array_key_exists($nome, self::$metodos)) {
            throw new Exception("Método estático '$nome' não suportado.");
        }
        return call_user_func_array(self::$metodos[$nome], $argumentos);
    }
}
?>