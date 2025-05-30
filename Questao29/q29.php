<?php
echo "<h3>Ciclo de Produção:</h3>";

$producoes = [1, 2, 3, 4, 5]; 

$index = 0;
$quantidade = 0;

while($quantidade < 5){
    $quantidade = $producoes[$index];
    echo "Ciclo " . ($index + 1) . ": Quantidade produzida = $quantidade <br>";
    $index++;
}

echo "<strong>Produção concluída com quantidade: $quantidade</strong>";
?>
