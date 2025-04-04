<?php
    /* Utilizando o laço de repetição for faça um script em que sera listado somente
    os 100 primeiros valores pares e para isso utilize a incrementação simples, ou seja 
    o incremento devera ocorrer de 1 em 1;
    Faça um script utilizando o laço em que serã somados todos os valores  entre 1 e 100
    Escreva um algoritimo que calcule o fatorial de um numero informado
    */
    for ($var=0; $var <=100 ; $var+=2) 
    { 
        echo "$var <br>";
    }
    echo "<hr>";
    $var2 = 0;
    for ($var=1; $var <=100 ; $var++) 
    { 
        $var2 = $var2 + $var;
        
    }
    echo "$var2 <br>";
    echo "<hr>";

    $valor = 9;
    $fatorial =1;
    for ($i=1; $i<=$valor ; $i++)
     $fatorial *= $i;
    echo "$fatorial";
    
?>