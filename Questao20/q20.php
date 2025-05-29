<?php
$usuarioAtivo = true;         // Simule: true ou false
$permissaoAdmin = true;       // Simule: true ou false

if($usuarioAtivo && $permissaoAdmin){
    echo "Acesso total concedido.";
} else {
    echo "Acesso negado.";
}
?>
