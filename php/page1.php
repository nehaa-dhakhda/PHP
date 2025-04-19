<?php
  session_start();
  $_SESSION['user']=$_POST["nm"];
  $_SESSION['pass']=$_POST["pass"];

  echo $_SESSION['user'];
  echo "<br><br>";
  echo $_SESSION['pass'];

  echo "<br><br><a href='page2.php'>MOVE PAGE:2</a>";
?>