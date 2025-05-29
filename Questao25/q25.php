<?php
echo "<h3>Tabela de Notas - PWEB1</h3>";

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>Matrícula</th>
        <th>Nome Completo</th>
        <th>Nota PWEB1</th>
      </tr>";

for($i = 1; $i <= 10; $i++){
    $matricula = "202500" . $i;  // Simula número de matrícula
    $nome = "Aluno " . $i . " Silva";  // Simula nome
    $nota = rand(0, 10);  // Nota aleatória entre 0 e 10

    echo "<tr>
            <td>$matricula</td>
            <td>$nome</td>
            <td>$nota</td>
          </tr>";
}

echo "</table>";
?>
