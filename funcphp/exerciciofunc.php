<?php
include "funcaoIntroducao.php";
include 'funcaotabuada.php';
    include 'funcaomedia.php';
    include 'funcaopar.php';
    include 'funcaoSinal.php';
    include 'funcapresentacao.php';
    include 'funcaosoma.php';
    include 'funcaodivisao.php';
    tabuada(8);
    echo "<br>A divisão é igual a:".dividir(20,5)."<br>";
    echo "<br>A média é: ".number_format (media(8,7,8),2,".",",")."<br>";
    par(9);
    sinal(somar(7,-14,7));
    apresentar("Professor");
  echo "<br> A soma é : ".somar(7,8,9)."<br>";
  echo "<br> A divisão é: ". dividir(9,4)."<br>";
   


?>