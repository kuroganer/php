<?php
    $senhaCorreta = 1234;
    $senha = "";
    $cont=0;
    $tentativa = 0;
        while ($senha !=$senhaCorreta) {
          $senha= readline("Digite a senha: ");
          if ($senha !=$senhaCorreta){
            echo "\n Senha Incorreta! Tente Novamente!\n";
          }
         $tentativa++;
        }
        echo "Acesso permitido! ";
        echo"<br>";
        echo "tentativas feitas: ".$tentativa;
        
       
?>