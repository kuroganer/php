<?php
    $nota = 7;
    if (($nota >= 0) || ($nota<=10))
    {
     if ($nota>=9)
    {
     echo "Mencão SS";
     }
        elseif ($nota>=7)
        {
        echo "Mencão MS";
        }
    
        elseif ($nota>=5)
        {
        echo "Mencão MM";
        }
        elseif ($nota>3) 
        {
        echo "Mencão MI";
        }
    else
    {
     echo "Mencão II";
     }
    }
    else
    {
        echo "Valor Invalido";
    }
?>