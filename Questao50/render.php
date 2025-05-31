<?php
$titulo = "Página de Exemplo";
$conteudo = "Este é o conteúdo dinâmico da página gerado pelo sistema de templates.";

$template = file_get_contents('template.html');

$template = str_replace('{{titulo}}', $titulo, $template);
$template = str_replace('{{conteudo}}', $conteudo, $template);

echo $template;
?>
