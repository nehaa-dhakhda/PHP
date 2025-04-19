<?php

  $nm=$_POST["f_nm"];
  $em=$_POST["f_em"];
  $cm=$_POST["f_cn"];

  $c=mysqli_connect("localhost","root","","pre_exam");

  $q="INSERT INTO `exam`(`name`,`email`,`contact`)VALUES('".$nm."','".$em."','".$cm."')";

  mysqli_query($c,$q);

  header("Location:view.php");

?>