<?php
/**
 * Personaliza a saída de var_dump() e print_r() para objetos dessa classe.
 * Ideal para esconder informações sensíveis ou exibir dados específicos durante debugging.
 */
class ExemploDebugInfo
{
    private $nome = 'Usuário';
    private $senha = 'secreta';

    public function __debugInfo()
    {
        return [
            'nome' => $this->nome,
            // senha propositalmente omitida
        ];
    }
}
?>