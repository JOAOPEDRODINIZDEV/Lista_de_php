<?php
function registrarEvento($mensagem) {
    $timestamp = date('Y-m-d H:i:s');  // Data e hora atual formatada
    $log = "[" . $timestamp . "] " . $mensagem . "\n";
    
    // Aqui apenas exibe na tela, mas poderia salvar em um arquivo.
    echo $log;
    
    // Para registrar em arquivo descomente a linha abaixo:
    // file_put_contents('log_eventos.txt', $log, FILE_APPEND);
}

// Exemplo de uso:
registrarEvento("Usuário realizou login.");
registrarEvento("Pedido foi processado com sucesso.");
?>
