<?php
function calcularAreaTerreno($largura, $comprimento) {
    return $largura * $comprimento;
}

// Exemplo de uso:
$largura = 10;      // metros
$comprimento = 25;  // metros

$area = calcularAreaTerreno($largura, $comprimento);
echo "A área do terreno é: " . $area . " m²";
?>
