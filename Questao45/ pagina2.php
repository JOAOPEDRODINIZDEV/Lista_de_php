<?php
include 'helpers.php';

$preco = 1234.56;
$precoFormatado = formatarPreco($preco);

echo "<p>Preço do produto: $precoFormatado</p>";
?>
