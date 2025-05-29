<?php
function ehPar($codigo) {
    // Verifica se o número é par (resto da divisão por 2 igual a zero)
    if ($codigo % 2 == 0) {
        return true;  // É par
    } else {
        return false; // É ímpar
    }
}

// Exemplo de uso:
$codigo1 = 24;
$codigo2 = 17;

echo "Código $codigo1 é par? " . (ehPar($codigo1) ? "Sim" : "Não") . "<br>";
echo "Código $codigo2 é par? " . (ehPar($codigo2) ? "Sim" : "Não") . "<br>";
?>
