<?php

   $id=$_POST["txt_id"];
   $name=$_POST["txt_nm"];
   $class=$_POST["class"];
   $ct=$_POST["ct"];
   $em=$_POST["em"];
   $t_ar=$_POST["ar"];
   $dob=$_POST["dt"];
    
    $conn=mysqli_connect("localhost","root","","fybca");
    if(!$conn){

                echo "connection fail";
    }
    else{

          echo "connection is successfull";
   }

    $qry="INSERT INTO student (`s_id`,`s_name`,`s_class`,`s_city`,`s_email`,`s_adress`,`s_dob`) VALUES ('$id', '$name','$class','$ct','$em','t_ar','dob')";
    mysqli_query($conn,$qry);

    echo "<a href='student.html'>BACK</a>";



?>