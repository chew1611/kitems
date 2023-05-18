<html>
<head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href=
"https://unpkg.com/@primer/css@^18.0.0/dist/primer.css" />   
<style>

        .form-control{
            width: 30%;
            margin:12px
           
        }
        .btn-primary{
            width: 200px;
        }
        .bf{
            border:1px solid white;
            margin: 12px;  width:45%   ;
            display: block;
            margin-left: auto;
            margin-right: auto; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            background-color: pink
            
        }  body{
            margin:12px ;
            background-color: lavender;
        } p{
            margin-left: 12px;
        }   
         select {
            width: 40%;
            padding: 10px 15px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color: orange;
            margin: 12px;
         }
         


/* CSS */
.button-16 {
  background-color: lavenderblush;
  border: 1px solid #f8f9fa;
  border-radius: 4px;
  color: #3c4043;
  cursor: pointer;
  font-family: arial,sans-serif;
  font-size: 14px;
  height: 36px;
  line-height: 27px;
  min-width: 54px;
  padding: 0 16px;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: pre;
  margin: 12px;
}

.button-16:hover {
  border-color: #dadce0;
  box-shadow: rgba(0, 0, 0, .1) 0 1px 1px;
  color: #202124;
}

.button-16:focus {
  border-color: #4285f4;
  outline: none;
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
</style>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!con)
{
    Die("Cannot connect databse");
}
$selectDb=mysql_select_db("kpop",$con);
if(!selectDb){
    Die("Cannot select Database".mysql_error());
}

  if(isset($_POST["submit1"]))
  {
      ?>
      <div class="bf">
      <form action="addnew.php" method="post"><?php
      ?>
      <h3 style="margin:12px">Add New Items</h3>
      <p>Artist</p><select name="artist" id="artist">
      <?php $sql="SELECT * FROM artist";
      $ret=mysql_query($sql,$con);
      while($res=mysql_fetch_array($ret))
      {
          
      ?><option><?php echo "{$res[1]}" ?></option>
      <?php
      }
      ?></select><br>
      <input type="submit" name="artistadd" value="Add New Artist" class="button-16">
      <p>Choose Category type</p>
      <p>Category</p><select name="category">
      <?php $sql="SELECT * FROM category";
      $ret=mysql_query($sql,$con);
      while($res=mysql_fetch_array($ret))
      {
          
      ?><option><?php echo "{$res[1]}" ?></option>
      
      <?php
      }
      ?></select>
      <input type="submit" name="categoryadd" value="Add New Category" class="button-16"><br>
      <p>Product Code</p><input type="text" name="pcode" class="form-control">
      <p>Product Name </p> <input type="text" name="pname" class="form-control">
      <p>Product Price </p> <input type="text" name="pPrice" class="form-control">
      <p>Product Size</p> <select name="size">
      <option>No Size</option>
      <option>XL</option>
      <option>XXL</option>
      <option>M</option>
      <option>S</option>
      <option>L</option>
      </select>
      
      <input type="submit" name="submit" value="OK">
      </form>
      
      
      <table>
                 
                 <tr><td>                           
                  <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Back</button></a>
                  </td>                                                                                                                                                                            
     
<td>     <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Home</button></a> </td>

</tr>
</table>
      <?php
  }
  if(isset($_POST["submit2"]))
  {
      ?>
<div class="anim-fade-up">
<div class="container text-center" style="margin-top:3%">
  <div class="row align-items-center">
  
      <form action="updatelist.php" method="post" class="bor">
      <h2 align="center">Choose What You Want to Change</h2>    <br>
         <div class="col"> 
      <input type="submit" name="updateName" value="Update product Name"
      class="btn btn-info"></div> <br>
          <div class="col"> 
      <input type="submit" name="updatePrice" value="Update Price "
      class="btn btn-info"></div>
      
      
      
           
      
      
      
      
      </form>
           
     
      </div>
      </div>
      </div>  <table>
                 
                 <tr><td>                           
                  <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Back</button></a>
                  </td>                                                                                                                                                                            
     
<td>     <a href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/Admin/manage.php"><button class="btn btn-lavender">Home</button></a> </td>

</tr>
</table>
      <?php
  }
?>
</body>
</html>
