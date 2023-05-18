<?php
  $con=mysql_connect("localhost","root","");
  if(!$con){
      
      die('Could not connect'.mysql_error());
  }
  $dbname="kpop";
  $db_selected=mysql_select_db($dbname,$con);
  if(!$db_selected){
      die("Cannot use $dbname".mysql_error());
  }
  
?>
