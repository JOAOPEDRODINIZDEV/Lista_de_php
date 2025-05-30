<?php
function registrarEvento($mensagem) {
    $timestamp = date('Y-m-d H:i:s'); 
    $log = "[" . $timestamp . "] " . $mensagem . "\n";
    
    echo $log;

}

registrarEvento("Usuário realizou login.");
registrarEvento("Pedido foi processado com sucesso.");
?>
