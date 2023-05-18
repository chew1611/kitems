


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       <style>
                    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

body{
    background: pink;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

       
       </style>
</head>
<body>
<?php
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
      Die("Cannot connect Database");
  }
  $selectDb=mysql_select_db("kpop",$con);
  if(!selectDb)
  {
      Die("Cannot use Database");
  }
  $OID=$_POST["submit"];
  $sql="SELECT order_detail.*,orderer.OId As OId
  ,product.PID As PID,product.ProductName As Name
   FROM order_detail INNER JOIN orderer ON 
   order_detail.OId=orderer.OId LEFT JOIN product ON 
  product.PID=order_detail.PID WHERE orderer.OId=$OID";
  $ret=mysql_query($sql,$con);
  ?>
  <table id="customers"><tr><th>Product Code</th>
                          <th> Product Name</th>
  <th>Quantity</th><th>Price</th>
 

  </tr>
  <?php
  while($res=mysql_fetch_array($ret))
  {
      ?>
      <tr><td align="center"><?php echo "{$res[2]}" ?></td>
      <td align="center"><?php echo "{$res[7]}"  ?></td>
     <td align="center"><?php echo "{$res[3]}" ?></td>
     <td align="center"><?php echo "{$res[4]}" ?></td></tr>
    <?php $total+=$res[4]; ?>
      <?
  }
?>
<tr><td colspan="2" align=center>Total Sale</td><td align=center colspan="2"><?php echo "$total"; ?></td></tr>
</table>

</body>
</html>