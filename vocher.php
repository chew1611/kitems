<?php session_start(); ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href=
"https://unpkg.com/@primer/css@^18.0.0/dist/primer.css" /> 
<style>
.wq{
  border: 1px solid white;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 
  border-radius: 5px;
  background-color: lavenderblush;
margin-top: 7%;height: 250px;
}body{
    background-image: url('g.jpg');
   
    background-size: cover;width: 100%;
}

</style>

        <div class="anim-fade-up">
<div class="wq">

<p style="text-align:center;margin-top:8%">
                                              <?php 
     $user=$_SESSION["user"];
     include("Database/cus.php");
     $sql="SELECT * FROM customer WHERE Customerid='$user'";
     $ret=mysql_query($sql,$con);
    while($res=mysql_fetch_array($ret)){
     ?>
Name: <?php echo "{$res[2]}" ?><br>
Address: <?php echo "{$res[6]}" ?><br>
<?php     }
  $oid=$_COOKIE["id"];  
  $sql="SELECT * FROM order_detail WHERE OId='$oid'";
  $ret=mysql_query($sql,$con);
                   ?>
Order Items: <br> <?php
$i=0; 
while($res=mysql_fetch_array($ret)){
?>
<?php 
echo "$i";      
$id="{$res[2]}";
$amount=$res[4];
$total=$total+$amount;
 $pql="SELECT * FROM product WHERE PID='$id'";
 $pet=mysql_query($pql,$con);
$pes=mysql_fetch_array($pet);   
 echo "{$pes[4]}" ; 
 $i++;       
   }?>   <br>
Total price:     <?php  echo $total; ?>

</p><p style="text-align: center;">
<i style="text-align: center;">Thanks your order</i></p>

</div>
</div>
</head>
</html>