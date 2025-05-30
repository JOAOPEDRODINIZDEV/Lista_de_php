<?php
$estado_civil = "C"; 

if($estado_civil == "C"){
    echo "Casado/a";
} elseif($estado_civil == "S"){
    echo "Solteiro/a";
} elseif($estado_civil == "D"){
    echo "Divorciado/a";
} elseif($estado_civil == "O"){
    echo "Outro";
} else {
    echo "Código inválido";
}
?>
