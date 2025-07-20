<?php
require 'Exemplos/ExemploConstructDestruct.php';
require 'Exemplos/ExemploGetSet.php';
require 'Exemplos/ExemploCall.php';
require 'Exemplos/ExemploToString.php';
require 'Exemplos/ExemploClone.php';
require 'Exemplos/ExemploCallStatic.php';
require 'Exemplos/ExemploIsset.php';
require 'Exemplos/ExemploUnset.php';
require 'Exemplos/ExemploInvoke.php';
require 'Exemplos/ExemploDebugInfo.php';
require 'Exemplos/ExemploSleep.php';
require 'Exemplos/ExemploWakeup.php';

echo "=============================\n";
echo "--- __construct e __destruct ---\n";
$ex1 = new ExemploConstructDestruct("Olá mundo");
unset($ex1); // força destruição para demonstrar __destruct

// echo "\n=============================\n";
// echo "--- __get e __set ---\n";
// $ex2 = new ExemploGetSet();
// $ex2->nome = "Maria"; // __set é chamado
// echo $ex2->nome . "\n"; // __get é chamado

// echo "\n=============================\n";
// echo "--- __call ---\n";
// $ex3 = new ExemploCall();
// $ex3->metodoQueNaoExiste("parâmetro1", 123); // __call é chamado

// echo "\n=============================\n";
// echo "--- __callStatic ---\n";
// echo ExemploCallStatic::upper('ola mundo') . "\n"; // __callStatic chama strtoupper
// echo ExemploCallStatic::length('teste') . "\n";    // __callStatic chama strlen

// echo "\n=============================\n";
// echo "--- __toString ---\n";
// $ex4 = new ExemploToString("Livro PHP");
// echo $ex4 . "\n"; // __toString chamado com echo

// echo "\n=============================\n";
// echo "--- __clone ---\n";
// $ex5 = new ExemploClone("Exemplo Original");
// $ex6 = clone $ex5; // __clone é chamado
// echo "Original: " . $ex5->valor . "\n";
// echo "Clonado: " . $ex6->valor . "\n";

// echo "\n=============================\n";
// echo "--- __isset ---\n";
// $ex7 = new ExemploIsset();
// var_dump(isset($ex7->nome));   // true -> __isset
// var_dump(isset($ex7->email));  // false -> __isset

// echo "\n=============================\n";
// echo "--- __unset ---\n";
// $ex8 = new ExemploUnset();
// unset($ex8->idade); // chama __unset
// // (não imprime nada, mas remove do array interno)

// echo "\n=============================\n";
// echo "--- __invoke ---\n";
// $ex9 = new ExemploInvoke();
// $ex9("param1", "param2"); // chama __invoke

// echo "\n\n=============================\n";
// echo "--- __debugInfo ---\n";
// $ex10 = new ExemploDebugInfo();
// var_dump($ex10); // __debugInfo define o que aparece

// echo "\n=============================\n";
// echo "--- __sleep e __wakeup ---\n";
// $ex11 = new ExemploSleep();
// $serializado = serialize($ex11); // __sleep chamado
// echo "Serializado: $serializado\n";

// $ex12 = unserialize($serializado); // __wakeup chamado
// echo "Objeto restaurado após unserialize.\n";


?>