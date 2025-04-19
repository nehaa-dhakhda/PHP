<?php
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){

                echo "connection fail....";
    }
    else{

          echo "connection is successfull";
-    }

    $qry="INSERT INTO 'category'('cat_name', 'cat_dec')VALUES('xyz', 'this is the category of Electronics.')";
         
    mysqli_query($conn,$qry);


?>