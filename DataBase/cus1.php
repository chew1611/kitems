<?php
  include("cus.php");
  
  $sql="CREATE TABLE customer1(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name varchar(30),CImage varchar(30),phoneno varchar(40),email varchar(30),userpassword varchar(30))";
  
  $ret=mysql_query($sql,$con);
  if($ret){

      echo"<p>Table created</p>". $last_id;
      
  }   else{
      echo"Wrong",mysql_error();
  }
  mysql_close($con);
?>
