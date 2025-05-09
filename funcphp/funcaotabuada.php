<?php
function tabuada($valor){
    for($i = 1; $i<= $valor; $i++){
        echo $i." * ".$valor." = ". $i*$valor."<br>";
    }
}

?>