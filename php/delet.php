<?php

$delet=$_POST["txt_d"];

$conn=mysqli_connect("localhost","root","","fybca");
    if(!$conn){

                echo "connection fail";
    }
    else{

          echo "connection is successfull";
   }

   $delet_qry="DELETE FROM `produc` WHERE `pro_id`= $delet";

   mysqli_query($conn,$delet_qry);

?>