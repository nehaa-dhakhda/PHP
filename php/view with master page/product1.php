<?php

   $id=$_POST["txt_id"];
   $name=$_POST["txt_nm"];
   $pr=$_POST["txt_pr"];
   $des=$_POST["txt_des"];
   $qty=$_POST["txt_qun"];
    
    $conn=mysqli_connect("localhost","root","","fybca");
    if(!$conn){

                echo "connection fail";
    }
    else{

          echo "connection is successfull";
   }

    $qry="INSERT INTO produc (`pro_id`, `pro_nm`,`pro_price`,`pro_des`,`pro_quantity`) VALUES ('$id', '$name','$pr','$des','$qty')";
    mysqli_query($conn,$qry);

    echo "<a href='product1.html'>BACK</a>";

?>