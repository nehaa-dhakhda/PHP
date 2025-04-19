<?php

  $del=$_REQUEST['id'];

  $c=mysqli_connect("localhost","root","","pre_exam");

  $q="DELETE FROM `exam` WHERE `id`=$del";

  mysqli_query($c,$q);

  header("Location:view.php");

?>