
<?php
  $up=$_REQUEST['u_id'];

  $c=mysqli_connect("localhost","root","","pre_exam");

  $q="SELECT * FROM `exam` WHERE `id`=$up";
  $ans=mysqli_query($c,$q);
  $row=mysqli_fetch_row($ans);

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
    <form action="update.php" method="post">
        <table border="3px" align="center">
            <tr>
                <td>Enter id:-</td>
                <td>
                    <input type="text" name="f_id" id="f_id" disabled value="<?php echo $row[0]; ?>">
                    <input type="hidden" name="f_hid" id="f_hid" value="<?php echo $row[0]; ?>">
                </td>
            </tr>
             <tr>
                <td>Enter Name:-</td>
                <td><input type="text" name="f_nm" id="f_nm" value="<?php echo $row[1]; ?>"></td>
            </tr>
             <tr>
                <td>Enter Email:-</td>
                <td><input type="email" name="f_em" id="f_em" value="<?php echo $row[2]; ?>"></td>
            </tr>
             <tr>
                <td>contact:-</td>
                <td><input type="text" name="f_cn" id="f_cn" value="<?php echo $row[3]; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>