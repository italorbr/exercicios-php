<?php 
    $alun1 = 5;
    $alun2 = 7;
    $alun3 = 4;
    $alun4 = 7;
    $alun5 = 9;
    $alun6 = 3; 
    $alun7 = 10;
    $alun8 = 4;
    $alun9 = 8;
    $alun10  = 9;
    $aprovados = 0;
    $reprovados = 0;
    $cont = 0;


        if ($alun1 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun2 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun3 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun4 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun5 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun6 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun7 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun8 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun9 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
        if ($alun10 >= 6) {
            $aprovados++;
        }else {
            $reprovados++;
        }
    echo "tivemos " . $aprovados . " alunos aprovados e " . $reprovados . " reprovados!"

?>