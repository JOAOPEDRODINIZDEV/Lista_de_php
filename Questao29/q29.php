<?php
echo "<h3>Ciclo de Produção:</h3>";

// Simula produções que irão aumentar até atingir o mínimo de 5
$producoes = [1, 2, 3, 4, 5];  // Simulação dos ciclos de produção

$index = 0;
$quantidade = 0;

while($quantidade < 5){
    $quantidade = $producoes[$index];
    echo "Ciclo " . ($index + 1) . ": Quantidade produzida = $quantidade <br>";
    $index++;
}

echo "<strong>Produção concluída com quantidade: $quantidade</strong>";
?>
