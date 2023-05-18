
<html>
      <head>
      
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                                                         
<link rel="stylesheet" href=
"https://unpkg.com/@primer/css@^18.0.0/dist/primer.css" />   
      
             <style>
                             body{
               font-family: serif;
               background:pink;
           }
      .bor{
      background-image:url('g.jpg');
      border:1px solid skyblue;
  background: skyblue;
  border-radius:5px;
  width:50%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  height:200px ;
  margin-top: 60px;
      }
      .btn-primary{
          display: block;
          margin-left: auto;
          margin-right: auto;
          
      }
      .ty{
          border: 1px solid pink;
          border-radius:5px;
          height:470px  ;
          display:block;
          margin-left  :auto;
          margin-right: auto;  width: 45%;
          margin-top: 18px;     box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      }
             
                    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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

.btn-lavender{
    display:block;margin-left: auto;margin-right: auto;
}

             </style>
      </head>
<body>
<?php
  if(isset($_POST["submit1"]))
  {
      ?>    

   <div class="anim-fade-up">

<form action="productUpdate.php" method="post" class="bor">

 

<div class="container text-center" style="margin-top:3%">
  <div class="row align-items-center">
                          <h3 style="tex-align:center;
                        ">Welcome Admin</h3><br><br><br>
    <div class="col">
   <input type="submit" name="submit1" value="Add new Product" 
  class="btn btn-info"
  
  
  
  >
    </div>
    <div class="col">
    <input type="submit" name="submit2" value="Update Product Details"class="btn btn-info">
    </div>
    <div class="col">
<input type="submit" name="submit3" value="View Product Sale"class="btn btn-info">
    </div>
  </div>
</div>
</form>
 
     

</div>  
      <?php
  }
else  if(isset($_POST["submit2"]))
  {
      ?>      <div class="ty">
            <div class="container text-center">
  <div class="row">
    <div class="col">
<img src="v.png" width="150px" style="display:block;margin-left:auto;margin-right:auto">
    </div>
    

  </div>
</div>
<div class="row justify-content-end">
    <div class="col-4">
<img src="po.png" style="width:150px">
    </div>
    <div class="col-4">
<img src="na.png" style="width:150px">  
    </div>
  </div>  
      <form action="addnew.php" method="post">
      <input type="submit" name="artistadd" value="Add new Artist" class="btn btn-primary"
      >
      
      </form>  
      <table>
                 
                 <tr><td>
                  <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Back</button></a>
                  </td>                                                                                                                                                                            
     
<td>     <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Home</button></a> </td>

</tr>
</table>
     
 
      </div>
      
      <?php
  }
 else if(isset($_POST["submit3"]))
  {
   
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
      <table id="customers">
      <tr style="text-align:center">
      <th style="text-align:center">OrderId</th>
      <th style="text-align:center">Customer Name</th>
      <th style="text-align:center">Order Date</th>
            <th style="text-align:center">Orders</th> 
      </tr>
      <?php
      while($res=mysql_fetch_array($ret))
  {

     ?><tr>
     <form action="vieworder2.php" method="post">
     <td align=center>
     <input type="text" hidden value=<?php echo "{$res[0]}" ?> name="submit">
     <?php echo "{$res[0]}" ?></td>
     <td align=center>
     <?php echo "{$res[3]}" ?></td>
     <td align=center>
     <?php echo "{$res[2]}" ?></td>
     <td><input type="submit" class="btn btn-primary"
     namespace="view order" value="View Order Detail"></form></td>
                 
                
               
    
    
     <?php
  }
  
  


  }
?>

 <table>
                 
                 <tr><td>
                  <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Back</button></a>
                  </td>                                                                                                                                                                            
     
<td>     <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Home</button></a> </td>

</tr>
</table>
</body>
</html>