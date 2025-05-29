<?php

$precoUnitario = 19.99;

// Exibe o preço
echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";

doubleval($precoUnitario);

echo "<br>";

// Exibe o tipo da variável usando gettype()
echo "Tipo da variável (usando gettype): " . gettype($precoUnitario);
?>
