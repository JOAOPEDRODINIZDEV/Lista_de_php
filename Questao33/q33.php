<?php
// Função que calcula o custo total
function calcularCustoTotal($precoUnitario, $quantidade) {
    $custoTotal = $precoUnitario * $quantidade;
    return $custoTotal;
}

$precoUnitario = 25.50;
$quantidade = 4;

$custo = calcularCustoTotal($precoUnitario, $quantidade);


$desconto = 0.1; 
$custoComDesconto = $custo - ($custo * $desconto);

echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";
echo "Quantidade: $quantidade <br>";
echo "Custo total: R$ " . number_format($custo, 2, ',', '.') . "<br>";
echo "Custo com desconto de 10%: R$ " . number_format($custoComDesconto, 2, ',', '.');
?>
