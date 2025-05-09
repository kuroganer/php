<?php

function sinal($z){
    echo $z==0 ? number_format($z,2,",","."). "é nulo <br>":($z>=0?   number_format($z,2,",",".")." é positivo <br>":  number_format($z,2,",",".")." é negativo <br>");
}
//(posNeg(media(20 - 10, 16)) == true) ? "positivo" : "negativo";
?>