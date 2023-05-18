<?php
session_start();
  $con=mysql_connect("localhost","root","");
  if(!$con){
      
      die('Could not connect'.mysql_error());
  }
  $dbname="kpop";
  $db_selected=mysql_select_db($dbname,$con);
  if(!$db_selected){
      die("Cannot use $dbname".mysql_error());
  }

               if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $ph=$_POST['ph'];
  $mail=$_POST['mail'];
  $address=$_POST['address'];
$password = $_POST["pwd"];

                               
  $sql="INSERT INTO customer(Name,Phone,Email,Password,Address) values ('$name','$ph','$mail','$password','$address')";
  
  
  $ret=mysql_query($sql,$con);
  $sql="SELECT CustomerId FROM customer WHERE Name='$name'";
  $ret=mysql_query($sql,$con);
  if($res=mysql_fetch_array($ret)){
   $_SESSION["user"]="{$res[0]}";  
   echo "Successfully created "; 
        ?>
        <html>
        <head>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
          <style>
          
          </style>
        </head>
        <body>
        <form action="../home.php" method="post">
        <input type="submit"  class="btn btn-primary" value="GO TO Market Place">
        </form>
        </body>
        </html>
        <?php
  }   else{
      echo"Wrong",mysql_error();
  }             }
  mysql_close($con);
?>
