<?php
echo "<h3>Total de Vendas do Mês</h3>";

$totalVendas = 0;

for($dia = 1; $dia <= 100; $dia++){
  
    $venda = rand(5000, 500000) / 100;
    $totalVendas += $venda;

    echo "Dia $dia: R$ " . number_format($venda, 2, ',', '.') . "<br>";
}

echo "<h3>Total acumulado: R$ " . number_format($totalVendas, 2, ',', '.') . "</h3>";
?>
