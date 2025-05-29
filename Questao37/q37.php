<?php
function saudacaoPersonalizada($nome) {
    return "Olá, " . htmlspecialchars($nome) . "! Seja bem-vindo(a)!";
}

// Exemplo de uso:
$usuario = "João Pedro";
echo saudacaoPersonalizada($usuario);
?>
