<?php


$nm =$_POST["nm"];
$city =$_POST["ct"];
$eml = $_POST["em"];
$adr=$_POST["ad"];

echo "<table border='2px' width='50%'>
<tr>
 <td>
Name
 </td>
 <td>".$nm."</td>
</tr>
<tr>
 <td>
City
 </td>
 <td>".$city."</td>
</tr>
<tr>
 <td>
Email
 </td>
 <td>".$eml."</td>
</tr>
<tr>
 <td>
address 
 </td>
 <td>".$adr."</td>
</tr>

</table>"
?>