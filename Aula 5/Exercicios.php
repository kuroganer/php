<?php
include "../Aula 4/funcao.php";
echo "EX1"; echo "<br>";
    $paisCapital = 
    [
        "Itália"=>"Roma",
        "Brasil"=>"Brasília",
        "França"=> "Paris",
        "Inglaterra"=>"Londres",
        "Canadá"=>"Quebec"
    ];
    
    $paisIndex= array_keys($paisCapital);
    func_exibir($paisIndex);
    echo"<hr>"; 

echo "EX2"; echo "<br>";
    $num_desord=
    [
        'a'=>10,
        'b'=>22,
        'c'=>54,
        'd'=>2,
        'e'=>1540,
        'f'=>27
    ];
    func_exibir($num_desord);
    sort($num_desord);
    func_exibir($num_desord);
    echo"<hr>";
echo "EX3"; echo "<br>";

    $produto=
    [
        "Arroz"=>19.99,
        'Feijão'=>10.99,
        "Queijo"=>50.00,
        "Desodorante"=>12.99
       
    ];
    func_exibir($produto);
    asort($produto);
    func_exibir($produto);
    echo"<hr>";
echo "EX4"; echo "<br>";
    $alunosNotas=
    [
        "Geraldo"=>8.5,
        "Marcela"=>9.7,
        "Pedro"=>4.2,
        "Ana"=>5,
        "Mariana"=>7.7
    ];
    func_exibir($alunosNotas);
        ksort($alunosNotas);
        func_exibir($alunosNotas);
        echo"<hr>";
echo "EX5"; echo "<br>";
    $nA=
    [
        'a'=>15,
        'b'=>12,
        'c'=>10,
        'd'=>1
    ];
    $nB=
    [
        'e'=>22,
        'f'=>25,
        'g'=>30,
        'h'=>2
    ];
    func_exibir($nA);
    func_exibir($nB);
            $numeros = array_merge($nA,$nB);
            func_exibir($numeros);
            echo"<hr>";
echo "EX6"; echo "<br>";
    $carrinhoCompras=
    [
        "Arroz"=>10,
        'Feijão'=>100,
        "Queijo"=>50,
        "Desodorante"=>2 
    ];
    func_exibir($carrinhoCompras);
    $carrinhoCompras['Molho de tomate']="25";
    func_exibir($carrinhoCompras);
    echo"<hr>";
echo "EX7"; echo "<br>";
    $carrinhoCompras['Desinfetante']="15";
    $carrinhoCompras['Amaciante']="4";
    func_exibir($carrinhoCompras);
    echo"<hr>";
echo "EX8"; echo "<br>";


?>