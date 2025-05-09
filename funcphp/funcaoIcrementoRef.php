
<?php
echo "<h1>Por referência</h1>";
function incrementarPorRef(&$numero)
{
    $numero++;
    echo "Dentro da funcão $numero <br>";
}
$valor = 15;
incrementarPorRef($valor);
echo "Fora da função $valor";
?>

