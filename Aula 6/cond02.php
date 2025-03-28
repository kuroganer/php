<?php

    $saldo=500;
    $saque=00;
    if ($saque>0)
    {
   
        if ($saque<=$saldo) 
        {
            echo "saque aprovado <br>";
            echo "valor do saque: $saque";
         }
        else {
           echo "Saldo indisponivel";
        }
    
    }
    else {
        echo "Informe um valor válido";
    }
?>