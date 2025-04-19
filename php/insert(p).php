<?php
    $id=$_POST["id"];
    $n=$_POST["nm"];
    $sub=$_POST["sub"];
    $price=$_POST["pr"];

    $con=mysqli_connect("localhost","root","","code");

    $qry="INSERT INTO `precticle`(`id`,`name`,`subject`,`price`) VALUES ('$id','$n','$sub','$price')";

    mysqli_query($con,$qry); 

   header("Location:view(p).php");
    
?>