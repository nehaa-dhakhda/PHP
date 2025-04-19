<?php
$c=mysqli_connect("localhost","root","","pre_exam");

  $q="SELECT * FROM `exam`";
  $ans=mysqli_query($c,$q);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <table border="3px" align="center">
            <tr>
                <th>no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th colspan="2">Operations</th>
            </tr>
           <?php
              while($row=mysqli_fetch_array($ans)) {
              echo "<tr>
                 <td>".$row[0]."</td>
                 <td>".$row[1]."</td>
                 <td>".$row[2]."</td>
                 <td>".$row[3]."</td>
                 <td><a href='delete.php?id=".$row[0]."'>Delete</a></td>
                 <td><a href='update_form.php?u_id=".$row[0]."'>Update</a></td>
              </tr>";
              }
           ?>
        </table>
    </form>
</body>
</html>