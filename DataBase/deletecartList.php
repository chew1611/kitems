<?php
include("cus.php");
  $id=$_POST["id"];
  $sql="DELETE FROM order_detail WHERE OrId=$id";
  if($ret=mysql_query($sql,$con))
  {
      header("location: ../checkorder.php");
  }
  else
  {
      echo "Something wrong".mysql_error();
  }
?>
