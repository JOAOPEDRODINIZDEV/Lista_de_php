<?php

$resumo = "O Instituto Federal de Educação, Ciência e Tecnologia é uma instituição pública brasileira, 
voltada para a educação técnica, tecnológica e superior. O IFCE busca promover o desenvolvimento científico 
e social por meio da oferta de cursos, pesquisas e extensão.";


$quantidadeCaracteres = strlen($resumo);

$quantidadePalavras = str_word_count($resumo);

echo "Quantidade de caracteres: " . $quantidadeCaracteres . "<br>";
echo "Quantidade de palavras: " . $quantidadePalavras . "<br>";

if ($quantidadePalavras >= 350 && $quantidadePalavras <= 500) {
    echo "Resumo dentro do limite exigido pelo IFCE.";
} else {
    echo "Resumo fora do limite exigido pelo IFCE.";
}
?>
    