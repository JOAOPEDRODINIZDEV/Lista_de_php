<?php
function calcularAreaTerreno($largura, $comprimento) {
    return $largura * $comprimento;
}

$largura = 10;  
$comprimento = 25;  

$area = calcularAreaTerreno($largura, $comprimento);
echo "A área do terreno é: " . $area . " m²";
?>
