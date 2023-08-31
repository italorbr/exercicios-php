<?php

        $num_1 = 440;
        $num_2 = 22;
        $num_3 = 60;
        $num_4 = 30;
        $troca = 1;
        $temp = 0;

        while ($troca == 1){
            $troca = 0;
            if ($num_1 > $num_2){
                $temp = $num_1;
                $num_1 = $num_2;
                $num_2 = $temp;
                $troca = 1;
            }
            if ($num_2 > $num_3){
                $temp = $num_2;
                $num_2 = $num_3;
                $num_3 = $temp;
                $troca = 1;
            }
            if ($num_3 > $num_4){
                $temp = $num_3;
                $num_3 = $num_4;
                $num_4 = $temp;
                $troca = 1;
            }
        }
 
    echo  "O maior numero eh o :  " . $num_4   
   
?>