<?php

$con=mysqli_connect("localhost","root","","code");
$qry="SELECT * FROM `img`";
$ans=mysqli_query($con,$qry);

echo "<table border='2px' align='center'>
     <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Photo</td>
        <td></td>
     </tr>";
while($result=mysqli_fetch_array($ans)){
    echo "<tr>";
    echo "<td>".$result[0]."</td>";
    echo "<td>".$result[1]."</td>";
    echo "<td><img src='img1/".$result[2]."'/></td>";
    echo "<td><a href='del_image.php?del=".$result[0]."'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

?>