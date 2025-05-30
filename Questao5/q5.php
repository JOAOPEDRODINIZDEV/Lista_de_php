<?php

$precoUnitario = 19.99;

echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";

doubleval($precoUnitario);

echo "<br>";


echo "Tipo da variável (usando gettype): " . gettype($precoUnitario);
?>
