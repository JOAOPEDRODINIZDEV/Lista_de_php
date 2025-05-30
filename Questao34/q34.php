<?php

function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    
    if ($quantidade == 0) {
        return 0;
    }

    $media = $soma / $quantidade;
    return $media;
}

$notasAluno = [7.5, 8.0, 6.5, 9.0, 8.5];

$mediaFinal = calcularMedia($notasAluno);

echo "As notas do aluno foram: " . implode(", ", $notasAluno) . "<br>";
echo "A média final do aluno é: " . number_format($mediaFinal, 2, ',', '.');
?>
