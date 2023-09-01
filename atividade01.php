<?php
    $rec = 0;
    $nota1 = 4;
    $nota2 = 4;
    $nota3 = 4;
    $media = ($nota1 + $nota2 + $nota3)/3;

    if($media < 5) {
        $rec = 10 - $media + 2;
        echo "Aluno em recuperacao. <br>";
        printf ("Nota necessaria para passar: %1\$.2f", $rec);
    }elseif($media < 7) {
        $rec = 10 - $media;
        echo "Aluno em prova final. <br>";
        printf ("Nota necessaria para passar: %1\$.2f", $rec);
    }else {
        echo "Aluno aprovado, parabens!!!";
    }

?>