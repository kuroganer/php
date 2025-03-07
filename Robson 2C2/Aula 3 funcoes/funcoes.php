<?php
    $texto_1 = 'escola tecnica de ceilandia';
    $texto_2 = 'ESCOLA TECNICA DE CEILANDIA';
    
//Retorna o tamanho de uma string(quantidade de caracteres)

    echo strlen($texto_1); echo "<br>";

//Converte a string pra caixa alta

    echo strtoupper($texto_1);echo "<br>";//UPER CASE
    echo strtolower($texto_2);echo "<br>";//lower case

 //Retorna parte de uma string
//substr (string, posição inicial, posição final)

    echo substr($texto_1,0,6);echo "<br>";
    
//Substitui uma parte da string por outra
// str_replace(procura palavra especifica, substiui por uma especifica, na string escolhida)
    echo str_replace("ceilandia", "brasilia",$texto_1);echo "<br>";

//Encontrar a posiç~çao da primeira ocorrência de uma substring

    echo strpos($texto_1, "ceilandia");echo "<br>";

//Retira os espaços em braco d inicio e do fm da string
    echo trim("  Olá,    PHP!   ");
    echo "<br>";

// Tansformar o primeiro caractere em caixa alta

    echo ucfirst($texto_1);
    echo "<br>";
    echo ucwords($texto_1);//primeira letra de cada palavra
    echo "<br>";


 //Divide uma string em um array com base em  um delimitado
    $frase = "maçã, banana, laranja";
    $array = explode(",", $frase);
    echo $array[0];echo "<br>";
    echo $array[1];echo "<br>";
    echo $array[2]; echo "<br>";
    echo"<br>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
//var_dump($array);

//junta elementos de um array em uma string
    $frutas= ["maçã "," banana "," laranja"];
    echo implode("-",$frutas);
    echo"<br>";
    echo "<hr>";

//atividade
    echo str_replace("ceilandia", "Ceilandia",$texto_1);
    echo "<br>";
    $sep = explode(" ",$texto_1);
    echo "<br>";
    echo ucfirst($sep[3]);
    echo "<br>";
    echo ($sep[0]." ".$sep[1]." ".$sep[2]." ".ucfirst($sep[3]));
    echo "<br>";
echo $subString = ucfirst(substr($texto_1,18));
echo "<br>";
/*echo $text = str_replace("ceilandia",$subString,$texto_1);
echo "<br>";*/
echo $text = str_replace("ceilandia",ucfirst(substr($texto_1,18)),$texto_1);


?>