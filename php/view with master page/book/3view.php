<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>BOOK INFORMATION</h1></center>
    <center>
    <table border="3px" width="900px">
        <tr>
            <th><a href="1ins.html">INSERT</a></th>
            <th><a href="3view.php">VIEW</a></th>
        </tr>
        <tr>
            <td colspan="4" height="400px" >
        
      <?php

         $con=mysqli_connect("localhost","root","","code");

         $view="SELECT * FROM `book`";

         $ans=mysqli_query($con,$view);
        
        echo "<table border='2px' align='center'>
                     <center> <h2> YOUR INFORMATION</h2> </center>
              <tr>
                    <td>Book Id</td>
                    <td>Book Name</td>
                    <td>Descripton</td>
                    <td colspan='2'>Book Price</td>
                    
              </tr>
            ";
         while($result=mysqli_fetch_array($ans))
         {
           echo "<tr>
             <td>".$result['b_id']."</td>
             <td>".$result['b_nm']."</td>
             <td>".$result['b_des']."</td>
             <td>".$result['b_pr']."</td>
             <td><a href='2del.php?p_id=".$result["b_id"]."'>Delete</a></td>
            </tr>";
        
         }
         echo "</table>";
        
       ?>
            </td>
        </tr>
    </table>
        </center>
</body>
</html>