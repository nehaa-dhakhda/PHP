<?php

        $v_table=$_POST["txt_view"];
         
         $con=mysqli_connect("localhost","root","","fybca");

         $sel_qry="SELECT * FROM $v_table";

         $ans=mysqli_query($con,$sel_qry);

         while($result=mysqli_fetch_array($ans))
         {
            echo $result['pro_id'];
            echo $result['pro_nm'];
            echo $result['pro_price'];
            echo $result['pro_des'];
            echo $result['pro_quantity'];
            echo "<hr>";
         }

?>