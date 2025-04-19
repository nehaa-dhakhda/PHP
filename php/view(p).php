<?php

$con=mysqli_connect("localhost","root","","code");

$qry="SELECT * FROM `precticle`";

$ans=mysqli_query($con,$qry);

echo "<table border='2px' align='center'>
<tr>
  <td>BOOK ID</td>
  <td>BOOK NAME</td>
  <td>SUBJECT</td>
  <td>BOOK PRICE</td>
  <tr>";

  while($row=mysqli_fetch_array($ans))
{
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td><a href='del(p).php?id=".$row[0]."'>delete</a></td>";

    echo "<tr>";


}

echo "</table>";   

?>