<?php
/**
 * O __construct é chamado ao criar um novo objeto e deve ser usado
 * para inicializar propriedades ou executar lógica de configuração.
 * O __destruct é executado quando o objeto é destruído ou o script termina,
 * útil para liberar recursos ou efetuar limpeza.
 */
class ExemploConstructDestruct
{
    public function __construct($mensagem)
    {
        echo "Construindo: " . $mensagem . "\n";
    }

    public function __destruct()
    {
        echo "|| Destruindo o objeto!\n";
    }
}
?>