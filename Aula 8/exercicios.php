<?php
/*01 Utlizando o laço while, crie um script em php que calcule a soma de todos os numeros de 1 a 100 e exiba o resultado
02. Escreva um script em php que exiba apenas os numeros pares de 1 a 20 utilizando o laço while
03 Crie um script que peça ao usuario um numero e exiba a tabuada desse numero de 1 a 10 usando o comando while
*/
echo "EX1 <br>";
    $var = 1;
    $var2=0;
    while ($var <=100 ) 
    { 
        $var2 = $var2 + $var;
        $var++;
        
    }
    echo "$var2 <br>";
echo "<hr>";

echo "EX2 <br>";
    $variavel = 1;
    while($variavel<=20)
    {
        if ($variavel %2 == 0) 
        {
            echo $variavel."<br>";
            //$soma += $variavel//soma todas as presentes
        }
        $variavel++;
    }
 echo "<hr>";

echo "<b>EX3</b> <br><br>";
    $numero = 5;
    $numero2 = 1;
    $numero3 = 0;
    while($numero2 <= 10)
    {
        $numero3 = $numero2;
        $numero3 = $numero * $numero3;    
            $numero2++;
    echo $numero."*".($numero2-1) ."= ".$numero3;echo "<br>";
    }


 
?>