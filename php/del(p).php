<?php

$delete=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","code");

$qry="DELETE FROM `precticle` WHERE `id`=$delete";

mysqli_query($con,$qry);

header("Location:view(p).php");

?>