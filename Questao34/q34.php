<?php
// Função para calcular a média de notas
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    
    if ($quantidade == 0) {
        return 0; // Evita divisão por zero
    }

    $media = $soma / $quantidade;
    return $media;
}

// Simulando um conjunto de notas
$notasAluno = [7.5, 8.0, 6.5, 9.0, 8.5];

// Chamando a função
$mediaFinal = calcularMedia($notasAluno);

// Exibindo o resultado
echo "As notas do aluno foram: " . implode(", ", $notasAluno) . "<br>";
echo "A média final do aluno é: " . number_format($mediaFinal, 2, ',', '.');
?>
