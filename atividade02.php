<?php

    $verde = 10.00;
    $azul = 20.00;
    $amarelo = 30.00;
    $vermelho = 40.00;
    $client_op = "azul";
    $client_qtd = 1.00;

    

    if($client_op == "verde") {
        $price = $verde * $client_qtd;
        $fprice = sprintf("%0.2f", $price);
        echo("Total da compra R$" . $fprice);
    }elseif($client_op == "azul") {
        $price = $azul * $client_qtd;
        $fprice = sprintf("%0.2f", $price);
        echo("Total da compra R$" . $fprice);
    }elseif($client_op == "amarelo") {
        $price = $amarelo * $client_qtd;
        $fprice = sprintf("%0.2f", $price);
        echo("Total da compra R$" . $fprice);
    }elseif($client_op == "vermelho") {
        $price = $vermelho * $client_qtd;
        $fprice = sprintf("%0.2f", $price);
        echo("Total da compra R$" . $fprice);
    }else {
        echo "digite uma opcao valida (verde, azul, amarelo ou vermelho)!";
    }


?>