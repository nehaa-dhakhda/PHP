<?php

   $id=$_POST["id"];
   $name=$_POST["nm"];
   $des=$_POST["des"];
   $pr=$_POST["pr"];
    
    $conn=mysqli_connect("localhost","root","","code");

    $qry="INSERT INTO book (`b_id`,`b_nm`,`b_des`,`b_pr`) VALUES ('$id', '$name','$des','$pr')";

    mysqli_query($conn,$qry);
  
    header("location:3view.php");

?>