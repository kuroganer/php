<?php
/*01) A empresa JavaMix resolveu dar aumento para o seus funcionários e 
lhe contrataram para deszenvolver o script que calculará os reajustes.

Faça um script em que receba o salário de um colaborador e o reajuste 
segundo o seguinte critério baseado no salário atual:
 Salários até R$280,00 (Incluido): Aumento de 20%
 Salários entre R$280,00 e R$700,00: Aumento de 15%
 Salários entre R$700,00 e R$1500,00: Aumento de 10%
 Salários de R$1500, 00 em diante: aumento de 5%
 Após o aumento ser realizado, informe na tela:
    A) O salario antes do reajuste
    B) O percentual de aumento aplicado
    C) O valor aumentado
    D) o novo salário, após o aumento: */


    $salario = 280;
    if ($salario>=1500) 
    {
      $aumento = "5%";
      $valorAumento = $salario*0.05;echo"<br>";
      $salarioNovo = $salario*1.05;
      echo "Salario antes do reajuste: RS". number_format($salario,2,',','.');
      echo"<br>";
      echo "Percentual de aumento aplicado: $aumento";
      echo"<br>";
      echo 'Valor do aumento: R$ '. number_format($valorAumento,2,',','.');
      echo"<br>";
      echo 'Novo Salário: R$ '. number_format($salarioNovo,2,',','.');
      echo"<br>";
    }
        elseif ($salario>700) 
        {
        $aumento = "10%";
        $valorAumento = $salario*0.1;
        $salarioNovo = $salario*1.1;
        echo "Salario antes do reajuste: RS". number_format($salario,2,',','.');
        echo"<br>";
        echo "Percentual de aumento aplicado: $aumento";
        echo"<br>";
        echo 'Valor do aumento: R$ '. number_format($valorAumento,2,',','.');
        echo"<br>";
        echo 'Novo Salário: R$ '. number_format($salarioNovo,2,',','.');
        echo"<br>";
        }
        elseif ($salario>280) 
            {
            $aumento = "15%";
            $valorAumento = $salario*0.15;
            $salarioNovo = $salario*1.15;
            echo "Salario antes do reajuste: RS". number_format($salario,2,',','.');
            echo"<br>";
            echo "Percentual de aumento aplicado: $aumento";
            echo"<br>";
            echo 'Valor do aumento: R$ '. number_format($valorAumento,2,',','.');
            echo"<br>";
            echo 'Novo Salário: R$ '. number_format($salarioNovo,2,',','.');
            echo"<br>";
            }
    else 
    {
        $aumento = "20%";
        $valorAumento = $salario*0.2;
        $salarioNovo = $salario*1.2;
        echo "Salario antes do reajuste: RS". number_format($salario,2,',','.');
        echo"<br>";
        echo "Percentual de aumento aplicado: $aumento";
        echo"<br>";
        echo 'Valor do aumento: R$ '. number_format($valorAumento,2,',','.');
        echo"<br>";
        echo 'Novo Salário: R$ '. number_format($salarioNovo,2,',','.');
        echo"<br>"; 
        
    }
?>