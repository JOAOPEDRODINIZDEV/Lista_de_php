<?php
function formatarPreco($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

$preco = 1234.56;
echo "Preço formatado: " . formatarPreco($preco);
?>
