<?php
    echo "<center><u><h1>MARKSHEET</h1></u></center>";

 $a=29;
 $b=35;
 $c=35;
 $d=45;

 $t=$a+$b+$c+$d;
 $p=$t/4;

 
  
    echo "<table border='3' width='50%' align='center'>";
    
    echo "<tr>";
    echo "<td>NAME</td>";
    echo "<td>Neha</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>EN.no</td>";
    echo "<td>220210319077</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>SUBJECT</td>"; 
    echo "<td>MARK</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>C</td>"; 
    echo "<td>".$a."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>CF</td>"; 
    echo "<td>".$b."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>HTML</td>"; 
    echo "<td>".$c."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>TCS</td>"; 
    echo "<td>".$d."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>TOTAL</td>";
    echo "<td>".$t."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>PR</td>"; echo "<td>".$p."</td>";
    echo "</tr>";
    echo "</table>";


 


?>