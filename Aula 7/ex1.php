<?php
/* Desenvolva uma calculadora simples que receba dois 
valores e uma operação (+,-,/,*) e retorne o resultado.
Use o comando switch paa determinar a operação a ser realizada.*/

$op = 'su';
$v1 = 3;
$v2 = 9;

    switch($op)
    {
        case 'so':
            echo "Opção: Soma escolhida <bR>";
            echo $v1." + ". $v2 ." = ". $v1 + $v2;
            break;
        case 'su':
            echo "Opção: Subtração escolhida <br>";
            echo $v1." - ". $v2 ." = ". $v1 - $v2;
        break;
        case 'di':
            echo "Opção: Divisão escolhida <br>";
            echo $v1." / ". $v2 ." = ".number_format(($v1 / $v2),2,",",".");
        break;
        case 'mu' :
            echo "Opção: Multiplicação escolhida <bR>";
            echo $v1." * ". $v2 ." = ". $v1 * $v2;
        break;
        default:
            echo "Opção Inválida!";
    }
?>