<?php
/*
Ex1
1)Crie o arquivo funcoes_stings.php e nele abra as tags do php e crie a vaiavel $text e atribua o valor: ""Curso de PHP da Escola Técinca de Ceilândia Prof.Alessandro Alves".
2) Utilize a função: strtolower passando o texto como argumento. Imprima o texto após a chamada da função
3)Utilize a função: strtouppe passando o texto como argumento
4)Utilize a função uc first passando o texto como argumento
5)Utilize a função strlen
6) Utilize a função str_replace*/
$texto = "Curso de PHP da Escola Técnica de Ceilândia Prof.Alessandro Alves";
echo strtolower($texto);
echo"<br>";
echo strtoupper($texto);
echo"<br>";
echo ucfirst($texto);
echo"<br>";
echo strlen($texto);
echo"<br>";
echo strpos($texto, "Escola");
echo"<br>";
echo $text = str_replace("Escola",strtoupper(substr($texto,16,6)),$texto);




?>