<?php

$delete=$_REQUEST['del'];

$con=mysqli_connect("localhost","root","","code");
$qry="DELETE FROM `img` WHERE `id`=$delete";

mysqli_query($con,$qry);

header("Location:view_image.php");

?>