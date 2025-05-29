<?php
echo "<h3>Lista de Participantes do Evento:</h3>";

$participantes = [
    "Ana leticia",
    "Carlos Grabriel",
    "Mariana guedes ",
    "Pedro Ramon",
    "João Pedro",
    "Thally",
    "Gabriella",
    "Binca",
    "Thalla",
    "Maryana"
];

echo "<ul>";
foreach($participantes as $nome){
    echo "<li>$nome</li>";
}
echo "</ul>";
?>
