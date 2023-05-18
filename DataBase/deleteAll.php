<?php            session_start();
  include("cus.php");
  $oid=$_COOKIE["id"];
  $sql="DELETE FROM order_detail WHERE OId=$oid ";
 if( $ret=mysql_query($sql,$con))
  {
    header("location: ../home.php");  
  }
?>
