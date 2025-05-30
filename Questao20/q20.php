<?php
$usuarioAtivo = true;      
$permissaoAdmin = true;    

if($usuarioAtivo && $permissaoAdmin){
    echo "Acesso total concedido.";
} else {
    echo "Acesso negado.";
}
?>
