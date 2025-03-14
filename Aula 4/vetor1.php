<?php
    include 'funcao.php';
    /*Forma direta de inserção de dados 
        $carros=[]
        $carros[]="Gol";
        $carros[]="Fusca";
        $carros[]= "Chevete";
        $carros[]= "Corsa;
    */
    //Criando elementos no vetor>array_push

        $carros = ["Gol", "Fusca", "Chevete", "Corsa", "Ka"];
    //Alterar valores dos dados do vetor
        $carros[0]= "Maverick";
        array_push($carros,"Belina", "Camaro");//sempre no final da lista

    //Apagando dados do vetor

        array_pop($carros);//apaga o ultimo
        unset($carros[0]);//apaga um especifico

    //insere informações no topo da lista

        array_unshift($carros, "Corola");
        array_unshift($carros, "GT950");


    //Excluir dados do inicio da lista
        array_shift($carros);


    //Visualização
        func_exibir($carros);


    //Retona o numero de elementos do array

        echo count ($carros);
        echo "<br>";

    //Recuperando dados do vetor


        echo  "Meu carro favorito é o: ".strtoupper ($carros[2]);






    
?>