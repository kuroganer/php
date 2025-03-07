<?php
//QUestão 1: Crie um script em php que calcule a area de um retangulo a saida devera ser a seguinte: A Area do retangulo é:
/*Questão 2
Você Tabalha em uma escola e ficou responsavel pela criação do codigo que ira calcular a média dos alunos, faça um script em 
o qual sera infomada 4 notas e ao final o script informara a média das notas da seguinte forma
A média das notas é*/
/*QUestão 3
Crie um script em php que voce devera informar o nome idade, altura e peso de uma determinada pessoa e logo em seguida e o seu
script devera calcular o seu IMC, exibindo seu nome, idade, altura, e IMC
*/
    $la= 7.2;
    $lb= 4.4;
    echo "Questão 01";echo"<br>";
    echo "A area do retangulo que possui {$la} cm e altura {$lb} cm é: ". ($la*$lb); 
    echo"<br>";


    $n1 = 7;$n2=6;$n3 = 8;$n4 =10;
    echo "Questão 02";echo"<br>";
    echo "A média das notas é: ". ($n1+$n2+$n3+$n4)/4; 
    echo"<br>";echo"<br>";echo"<br>";


    $nome = "Robson";
    $idade = 32;
    $altura = 1.75;
    $peso=75;
    $imc =round( $peso/($altura^2),2);
    echo "Questão 3";echo"<br>";
    echo "Nome: $nome";echo"<br>";echo"<br>";
    echo "Idade: $idade";echo"<br>";echo"<br>";
    echo "Altura: $altura";echo"<br>";echo"<br>";
    echo "IMC: {$imc}";echo"<br>";echo"<br>";


?>