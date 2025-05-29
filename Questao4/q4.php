<?php
// Variável booleana para o status de um pedido
$pedidoEntregue = true;

// Exibe o status de forma compreensível usando condicional
if ($pedidoEntregue) {
    echo "Status do pedido: Entregue.";
} else {
    echo "Status do pedido: Pendente.";
}
?>
