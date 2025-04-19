<?php
$del=$_POST['f_hid'];
$nm=$_POST["f_nm"];
$em=$_POST["f_em"];
$cm=$_POST["f_cn"];

  $c=mysqli_connect("localhost","root","","pre_exam");

  $q="UPDATE `exam` SET `name`='".$nm."',`email`='".$em."',`contact`='".$cm."' WHERE `id`=".$del;

  mysqli_query($c,$q);

  header("Location:view.php");

?>