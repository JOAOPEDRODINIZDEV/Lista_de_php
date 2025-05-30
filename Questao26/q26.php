<?php
echo "<h3>Simulação de entrada de dados:</h3>";

$entradas = [5, 10, 3, 7, 0, 9, 2];

$index = 0;

do {
    $valor = $entradas[$index];
    echo "Valor digitado: $valor<br>";
    $index++;
} while($valor != 0);
?>
