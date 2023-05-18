<?php
session_start();
include("Database/cus.php");
  $id=$_POST["id"];
$uid=$_SESSION["user"];
 if(!isset($_COOKIE["cart"])){
  $sql="INSERT INTO Orderer(CustomerId,Date)VALUES
  ('$uid',curdate())";
  if(mysql_query($sql,$con)){
  
      setcookie("cart",$id, time() + 3600); 
      setcookie("id",mysql_insert_id($con),time () + 3600) ;
  
  }else{
      DIE("cannot add new colum".mysql_error());
  }
 }
  $oid=$_COOKIE["id"];
  $qty=$_POST["qty"];
  
$sql="INSERT INTO order_detail(OId,PID,Quantity)
VALUES($oid,'$id',$qty)";
  if(!(mysql_query($sql,$con)))
  {
      Die("Cannot add Order_details".mysql_error());
  }
     else{
         ?>    


          <form action="home.php" method="post">
          <input type="submit" value="More to Cart">
          </form>
          

         <?php
     }
 
 
?>