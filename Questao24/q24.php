<?php
echo "<h3>Processando itens...</h3>";

$totalItens = 100;
$processados = 0;

for($i = 1; $i <= $totalItens; $i++){
    echo "Item " . $i . " processado.<br>";
    $processados++;

    if($processados >= 50){
        echo "<strong>Limite de processamento atingido: $processados itens.</strong>";
        break;
    }
}
?>
