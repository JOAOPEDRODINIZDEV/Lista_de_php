<?php
// Cria uma variável com um parágrafo de exemplo
$resumo = "O Instituto Federal de Educação, Ciência e Tecnologia é uma instituição pública brasileira, 
voltada para a educação técnica, tecnológica e superior. O IFCE busca promover o desenvolvimento científico 
e social por meio da oferta de cursos, pesquisas e extensão.";

// Conta os caracteres com função nativa strlen()
$quantidadeCaracteres = strlen($resumo);

// Conta as palavras com função nativa str_word_count()
$quantidadePalavras = str_word_count($resumo);

// Exibe os resultados
echo "Quantidade de caracteres: " . $quantidadeCaracteres . "<br>";
echo "Quantidade de palavras: " . $quantidadePalavras . "<br>";

// Verifica se está dentro do limite exigido pelo IFCE
if ($quantidadePalavras >= 350 && $quantidadePalavras <= 500) {
    echo "Resumo dentro do limite exigido pelo IFCE.";
} else {
    echo "Resumo fora do limite exigido pelo IFCE.";
}
?>
    