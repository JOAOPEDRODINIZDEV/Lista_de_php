<?php
function ehPar($codigo) {

    if ($codigo % 2 == 0) {
        return true;  
    } else {
        return false; 
    }
}

$codigo1 = 24;
$codigo2 = 17;

echo "Código $codigo1 é par? " . (ehPar($codigo1) ? "Sim" : "Não") . "<br>";
echo "Código $codigo2 é par? " . (ehPar($codigo2) ? "Sim" : "Não") . "<br>";
?>
