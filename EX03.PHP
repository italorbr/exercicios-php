<?php
    $grao = 1;
    $cont = 1;

    while($cont < 64) {
        $grao = $grao * 2;
        $cont++;
    }
    echo "Graos = " . $grao . "<br>";
    echo "Casas = " . $cont;
?>