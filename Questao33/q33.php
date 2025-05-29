<?php
// Função que calcula o custo total
function calcularCustoTotal($precoUnitario, $quantidade) {
    $custoTotal = $precoUnitario * $quantidade;
    return $custoTotal;
}

// Simulando os dados
$precoUnitario = 25.50;
$quantidade = 4;

// Chamando a função
$custo = calcularCustoTotal($precoUnitario, $quantidade);

// Usando o custo em um cálculo posterior (exemplo: aplicando um desconto)
$desconto = 0.1; // 10% de desconto
$custoComDesconto = $custo - ($custo * $desconto);

// Exibindo os resultados
echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";
echo "Quantidade: $quantidade <br>";
echo "Custo total: R$ " . number_format($custo, 2, ',', '.') . "<br>";
echo "Custo com desconto de 10%: R$ " . number_format($custoComDesconto, 2, ',', '.');
?>
