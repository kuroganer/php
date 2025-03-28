<?php
    $valor = 10;
        if ($valor % 2 == 0)
     /*  Se for simples pode se usar um operador ternário (?) e dois pontos(:) para representar o else
     {
            Echo $valor. " é par";
        }
        else {
            echo $valor." é Impar";
        }*/
        echo ($valor% 2 == 0)? "Par":"Impar" ; //operador ternario


?>