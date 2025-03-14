<?php
    function show($pf)
    {
        echo "<pre>";
print_r(value: $pf) ;
echo "</pre>";
echo"<br>";
array_unshift($pf, "Francisco");
echo "<pre>";
print_r(value: $pf) ;
echo "</pre>";
echo"<hr>";
    }
?>