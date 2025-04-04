<?php
    $mes = 12;

    switch($mes)
    {
        case 12:
        case 1:
        case 2:
          $estacao = "Verão";
          $caracteristica = "Estação quente, ideal para praia e piscinas";
        break;
        case 3:
        case 4:
        case 5:
            $estacao = "Outono";
            $caracteristica = "Temperaturas amenas, folhas caem das arvores";
        break;
        case 6 :
        case 7 :
        case 8 :
            $estacao = "Inverno";
            $caracteristica = "Estação fria, em algumas regiões pode nevar";
        break;
        case 9:
        case 10:
        case 11:
            $estacao =  "Primavera";
            $caracteristica = "Estação das flores, temperaturas agradaveis";
        break;
        default:
            $estacao = "Mês inválido";
            $caracteristica = "";    
    }
        $saida = "Mês $mes coresponde a estação $estacao <br>";
        if($mes>12)
        {
            echo  "$estacao";
        }
        else
            echo $saida;

         if(!empty($caracteristica))
         {
            echo "Caracteristicas : $caracteristica";
         }
         
?>