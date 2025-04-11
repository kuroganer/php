<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while repeat</title>
</head>
<body>
    <table>
<tr>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
</tr>
<?php
    $cont = 1;
    while ($cont>10) 
    {
        if ($cont %2 != 0) {
           echo "<tr>";
           echo"<td>$cont</td>";
                  
        if ($cont+1<=10 )
        {
            echo"<td>".($cont+1)."</td>";
        }
        else
        {
            echo "<td></td>";
        }
    } 
        echo "</tr>";
    
    $cont++;
} 

?>
</table>
</body>
</html>