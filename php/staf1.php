<?php
   $id=$_POST["txt_id"];
   $name=$_POST["txt_nm"];
   $desg=$_POST["dg"];
   $ery=$_POST["ey"];
   $Ag=$_POST["ag"];
   $sal=$_POST["sl"];
    $conn=mysqli_connect("localhost","root","","fybca");
    if(!$conn){
                echo "connection fail";
    }
    else{
          echo "connection is successfull";
   }
    $qry="INSERT INTO staff (`sf_id`,`sf_nm`,`sf_desg`,`sf_ex`,`sf_ag`,`sf_sl`	) VALUES ('$id', '$name',' $desg','$ery',' $Ag','$sal')";
    mysqli_query($conn,$qry);

echo "<a href='staf1.html'>BACK</a>";
?>