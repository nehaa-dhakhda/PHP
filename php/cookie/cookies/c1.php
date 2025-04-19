<?php

$cookie_name = "au";
$cookie_value = $_POST["txt_nm"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



$cookie_name1 = "u1";
$cookie_value = $_POST["txt_nm1"];
setcookie($cookie_name1, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


echo $_COOKIE["user"];
echo "<br>";
echo $_COOKIE["u"];
?>
