<?php
echo "<h3>Total de Vendas do Mês</h3>";

$totalVendas = 0;

for($dia = 1; $dia <= 100; $dia++){
    // Valor aleatório entre 50.00 e 5000.00
    $venda = rand(5000, 500000) / 100; // rand() só trabalha com inteiros
    $totalVendas += $venda;

    echo "Dia $dia: R$ " . number_format($venda, 2, ',', '.') . "<br>";
}

echo "<h3>Total acumulado: R$ " . number_format($totalVendas, 2, ',', '.') . "</h3>";
?>
