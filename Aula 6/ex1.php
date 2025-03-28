<?php
    /*
    01)Crie um script em que uma loja irá utilizar para dar descontos nos seus produtos para oferece
    as melhores ofertas para o seus clientes. Foi criado um programa de descontos progressivos,
    quanto mais o cliente compra, maior o desconto recebido.
    
    Assim a politica de descontos é: 

    Compras acima de R$ 1000,00 Recebem 10% de desconto
    Compras entre R$ 500,00 e R$1000,00 recebem 5% de desconto
    Compras abaixo de R$ 500,00 não recebem desconto

  O seu sistema deverá exibir:
  a) O valor da compra
  b) a porcentagem do desconto aplicado
  c) O valor em reais do desconto
  d) O preço do produto com o desconto aplicado
  */
    $valorCompra = 500.00;
    
    if ($valorCompra > 1000)
        {
            echo "Valor da compra: R$".number_format($valorCompra,2,',','.');
            echo" <br>";
            echo "Valor do desconto: 10%<br>";
            echo "Valor descontado: R$".number_format(($valorCompra*0.1),2,',','.');
            echo" <br>";
            echo "Total: R$".number_format(($valorCompra*0.9),2,',','.');
            echo" <br>";
        }
            elseif ($valorCompra>=500) 
            {
                echo "Valor da compra: R$".number_format($valorCompra,2,',','.') ; echo"<br>";
                
                echo "Valor do desconto: 5% <br>";
                echo "Valor descontado: R$".number_format(($valorCompra*0.05),2,',','.');
                echo" <br>";
                echo "Total: R$" .number_format(($valorCompra*0.95),2,',','.');
                echo" <br>";
            }
    else
        {
        echo "Valor da compra: R$" .number_format($valorCompra,2,',','.') ; echo"<br>";
        echo "Valor do desconto: 0% <br>";
        echo "Total: R$" .number_format($valorCompra,2,',','.') ; echo"<br>";
        }


?>