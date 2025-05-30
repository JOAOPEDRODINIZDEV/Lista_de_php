<?php
function saudacaoPersonalizada($nome) {
    return "Olá, " . htmlspecialchars($nome) . "! Seja bem-vindo(a)!";
}

$usuario = "João Pedro";
echo saudacaoPersonalizada($usuario);
?>
