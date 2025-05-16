<?php
require_once'ContaBancaria.php';

    $conta =  new ContaBancaria;
    //$conta->titular="Robson"; ao pedir para ser exibido como é privado dara erro

    //acessar atributo privado
$conta->setTitular("Robson");
$conta->depositar(1000);
$conta->depositar(5000);
$conta->depositar(380);
$conta->saque(600);
$conta->saque(2200);
$conta->saque(5500);

//echo "Bem vindo ". $conta->getTitular()." a sua conta";
echo "Bem vindo {$conta->getTitular()} a sua conta <br>";
echo "Seu Saldo atual é : R$ ".number_format($conta->getSaldo(),2,",",".")."<br>";


    //exibição
    echo "<pre>";
    print_r($conta);
    echo "</pre>";
?>