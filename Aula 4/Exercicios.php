<?php
echo "Exercicio 01";echo"<br>";
    $frutas=[];
    $frutas[]="Maçã";
    $frutas[]="Abacaxi";
    $frutas[]="Banana";
    $frutas[]="Manga";
    $frutas[]="Pera";

    //Contar a quantidade de elementos nesse vetor
      echo count($frutas);echo"<hr>";
//02
echo "Exercicio 02";echo"<br>";
$fila = ["b01","b02","b03", "b04"];
print_r($fila) ;
echo"<br>";
array_pop($fila);
print_r($fila) ;
echo"<hr>";
//03
echo "Exercicio 03";echo"<br>";
$nome = [];
array_push($nome, "Thiago", "Marcia", "Geraldo");
var_dump($nome);
array_push($nome,"Marcelo", "Teresa");
echo"<br>";
print_r($nome) ;
echo"<hr>";
//04
echo "Exercicio 04";echo"<br>";
$tarefas = ["lava a louça", "jogar o lixo", "lavar o carro", "banhar o cachorro", "Estudar"];
echo"<br>";
print_r(value: $tarefas) ;
echo"<br>";
array_shift($tarefas);
print_r(value: $tarefas) ;
echo"<hr>";
//05
include 'func2.php';
echo "Exercicio 05";echo"<br>";
$pessoasNaFila = ["Ana", "George", "Roberta"];
show($pessoasNaFila);


?>