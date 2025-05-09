<?php
function carrinhoCompra($valor, $quantidade=1, &$total){
    $subtotal=$valor*$quantidade;
    $total=$total+$subtotal;
    echo "Adicionado R$ ". number_format($subtotal,2,',','.'). " ao total <br>";
}
$total_compra=0;
carrinhoCompra(7.99,8,$total_compra);
carrinhoCompra(10,2,$total_compra);
carrinhoCompra(4.50,2,$total_compra);
echo "<hr>O total final da compra é: R$ ".number_format($total_compra,2,',','.');
?>