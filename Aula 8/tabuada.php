<?php
   
   /*$cont = 1;
   $valor =  readline("Informe um Valor entre 1 e 10 para calculo: ");
   if ($valor> 0 and $valor<=10) {
    while($cont<=10){
        echo "$cont * $valor = ".$cont*$valor;echo "\n";
        $cont++;
     }
   }
   else {
    echo "Número inválido";
   }*/
 
   $cont = 1;
   $valor =  readline("Informe um Valor entre 1 e 10 para calculo: ");
   while(($valor<= 0 or $valor>10)){
    echo "Número inválido \n";
    $valor =  readline("Informe um Valor entre 1 e 10 para calculo: ");
       }
       $cont = 1;     
    
        while($cont<=10){
            echo "$cont * $valor = ".$cont*$valor;echo "\n";
            $cont++;
         }
       
    
   

?>