<?php
session_start();
?>

<html>
<head>   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<style>



       table {
  border-collapse: collapse;
  width: 100%;
  background: skyblue;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: pink;
  color: black;
}
</style>
</head>
<body>
<?php
  
  
  
    include("Database/cus.php");
  if(isset($_SESSION["cart"])){
      $user=$_SESSION["user"];
  $oid=$_COOKIE["id"];
  $sql="SELECT order_detail.*,orderer.OId As oid,
   orderer.CustomerId As cus FROM orderer
    LEFT JOIN order_detail ON orderer.OId=$oid 
    AND orderer.CustomerId=$user 
  AND order_detail.OId=orderer.OId";
   $ret=mysql_query($sql,$con);
 echo  "<table border=1><tr><th>product Name</th><th>Quantity</th><th>Amount</th><th></th>";
  while($res=mysql_fetch_array($ret)){
      $name="{$res[2]}";
      $quantity="{$res[3]}";
      $Amount="{$res[4]}";
      $id="{$res[0]}";
      if($name != null){
          ?> <form action="Database/deletecartList.php" method="post">
         <tr> <td><?php 
         $tql="SELECT * FROM product WHERE PID='$name'";
          $aa=mysql_query($tql,$con);
          $aes=mysql_fetch_array($aa);
          echo "{$aes[4]}" ?></td><input type="text" hidden name="id" value=<?php  echo "$id" ?>>
         <td><?php echo $quantity ?></td>
         <td><?php echo $Amount ?></td>
          <td><input type="submit" value="Delete"></td>
          </tr></form><?php
          $total=$total+$Amount;
      }        ?> 
        
   <?php                            
  }  ?><tr><td colspan="2">Total Amount</td><td><?php echo $total ?></td></tr>
      <tr><form action="vocher.php" method="post"><td><input type="submit" value="Order" class="btn btn-primary"></td></form>
      <td>
     <form action="Database/deleteAll.php" method="post"> <input type="submit" value="Clear ALL" class="btn btn-primary"></td><td></td><td></td></tr></form>
      </table>
  <?php
  }else
  {
      echo "<h3 style='text-align:center;color:red'>No add to cart product</h3>";
  }
?>

</body>
</html>