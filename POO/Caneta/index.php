<?php
    require 'Caneta.php';

    $caneta = new Caneta;//new tranforma uma classe em um objeto palpavel
   $caneta2= new Caneta;

    $caneta->modelo="BIC";
    $caneta->cor="Preta";
    $caneta->ponta=0.5;
    $caneta->carga=100;
    $caneta->tampada=true;
    $caneta->destampar();
    $caneta->tampar();//altera o valor do atributo ao inserir o metodo
    $caneta->rabiscar();
    $caneta->destampar();
    $caneta->rabiscar();
    /*
    $caneta2->modelo="Compactor";
    $caneta2->cor="Azul";
    $caneta2->ponta=0.7;
    $caneta2->carga=40;
    $caneta2->tampada= false;
*/
    echo "<pre>";
    print_r($caneta);
    echo "</pre>";
    echo "<br> <br>";
   



?>