<?php

$temperatura = 35;
 echo "A Temperatura atual é: ". $temperatura . "<br>";
if($temperatura <= -1){
    echo "Alerta Gelo";
}elseif($temperatura >= 0 && $temperatura <= 14){
    echo "Clima ameno";
}elseif($temperatura >= 15 && $temperatura <= 25){
    echo "Clima agradável";
}else{
    echo "Calor Extremo";
}

?>
