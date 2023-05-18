<?php
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
      Die("cannot connect database");
  }
  $selectDb=mysql_select_db("kpop",$con);
  if(!selectDb)
  {
      Die("cannot use Database");
  }
  
  $sql="SELECT orderer.*,customer.Name AS name FROM orderer LEFT JOIN customer ON orderer.CustomerId=customer.CustomerId";
      $ret=mysql_query($sql,$con);
      ?>
      <table width="45%" border="1">
      <tr><th>OrderId</th><th>Customer Name</th><th>Order Date</th></tr>
      <?php
      while($res=mysql_fetch_array($ret))
  {

     ?><tr><td align=center>
     <?php echo "{$res[0]}" ?></td>
     <td align=center>
     <?php echo "{$res[3]}" ?></td>
     <td align=center>
     <?php echo "{$res[2]}" ?></td>
     <td><form action="vieworder2.php" method="post"><input type="submit" name="submit" 
     namespace="view order" value=<?php echo "{$res[0]}"?>></form></td><?php
  }
  
  
?>
