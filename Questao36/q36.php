<?php
function verificarMaioridade($idade) {
    if ($idade >= 18) {
        return "Liberado (Maior de idade)";
    } else {
        return "Acesso negado (Menor de idade)";
    }
}

$idades = [15, 18, 22, 17];

foreach ($idades as $idade) {
    echo "Idade: $idade - Status: " . verificarMaioridade($idade) . "<br>";
}
?>
