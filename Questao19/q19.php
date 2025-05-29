<?php
$cargo = "Desenvolvedor"; // Altere para "Designer" ou "Gerente" para testar

if($cargo == "Desenvolvedor"){
    $salario = 5000;
}elseif($cargo == "Designer"){
    $salario = 4000;
}elseif($cargo == "Gerente"){
    $salario = 7000;
}else{
    $salario = 0;
}

if($salario > 0){
    echo "Cargo: $cargo<br>";
    echo "Salário base: R$ " . number_format($salario, 2, ',', '.');
}else{
    echo "Cargo inválido";
}
?>
