<?php

$custoMaterial = 1500.50;
$custoMaoDeObra = 800.75;

$custoTotal = $custoMaterial + $custoMaoDeObra;


echo "Custo de Material: R$ " . number_format($custoMaterial, 2, ',', '.') . "<br>";
echo "Custo de Mão de Obra: R$ " . number_format($custoMaoDeObra, 2, ',', '.') . "<br>";
echo "Custo Total: R$ " . number_format($custoTotal, 2, ',', '.');
?>
