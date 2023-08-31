<?php
    $grao = 1;
    $cont = 1;
    $total = 0;

    while($cont <= 64) {
        echo "Casa = " . $cont . " :::::::::::::" . " Graos = " . $grao . "<br>";
         
        
        $total = $grao + $total;

        echo "Total de graos no momento = " . $total . "<br><br>";
        $grao = $grao * 2;
        $cont++;
        
    }
    

   