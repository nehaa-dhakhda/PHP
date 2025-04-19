<?php

$delet=$_REQUEST["p_id"];

$conn=mysqli_connect("localhost","root","","code");

   $delet_qry="DELETE FROM `book` WHERE `b_id`= $delet";

   mysqli_query($conn,$delet_qry);
   
   header("Location:3view.php");

?>