<?php
    $usuDigitou = "Admin";
    $senhaDigitada = "1234";


    $usuValido = "Admin";
    $senhaValida =  1234;

    if ($usuValido==$usuDigitou and $senhaValida == $senhaDigitada)
     {
       echo "Login Realizado com sucesso!";
    }
    else {
        echo "Usuario ou senha inválidos!";
    }
?>