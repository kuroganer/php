<?php
echo "<h1>Por Valor</h1>";
function incrementarPorValor($numero)
{
    $numero++;
    echo "Dentro da funcão $numero <br>";
}
$valor = 15;
incrementarPorValor($valor);
echo "Fora da função $valor";
?>