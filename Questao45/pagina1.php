<?php
include 'helpers.php';

$notas = [7.5, 8.0, 9.2];
$media = calcularMedia($notas);

echo "<h2>Média do aluno: " . number_format($media, 2) . "</h2>";
?>
