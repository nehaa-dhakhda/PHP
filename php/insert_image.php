<?php
  
$id=$_POST["i_id"];
$name=$_POST["i_nm"];
$filename=$_FILES['i_img']['name'];
$source=$_FILES['i_img']['tmp_name'];

$con=mysqli_connect("localhost","root","","code");
$qry="INSERT INTO `img`(`id`,`nm`,`ph`) VALUES('$id','$name','$filename')";
mysqli_query($con,$qry);

move_uploaded_file($source,'img1/'.$filename);

header("Location:view_image.php");
?>