<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    Die("cannot connect database");
}
$selectDb=mysql_select_db("kpop",$con);
if(!selectDb)
{
    Die("cannot select Db");
}
/*
 For add artist
*/
 if(isset($_GET['incorrect'])):?>
<div>
something wrong in login
</div>
<?php endif ?>
  <?php if(isset($_POST["artistadd"]))
  {
     ?><form action="add.php" method="post"><h1 align="center">Add New Artist</h1>
     <p>ArtistID</p><input type="text" name="AID"><br>
     <p>ArtistName</p><input type="text" name="Aname">
     <br><input type="submit" name="addartist" value="Add"></form> <?php
  }
  
   if(isset($_POST["categoryadd"]))
  {
     ?>
     <form action="add.php" method="post"><h1 align="center">Add New Category</h1>
     <p>CategoryID</p><input type="text" name="CID"><br>
     <p>CategoryName</p><input type="text" name="Cname">
     <br><input type="submit" name="addcategory" value="Add"></form> 
     <?php 
  }
  if(isset($_POST["submit"]))
  {
      $artist=$_POST["artist"];
      $category=$_POST["category"];
      $name=$_POST["pname"];
      $price=$_POST["pPrice"];
      $size=$_POST["size"];
      $code=$_POST["pcode"];
      
      $sql="SELECT * FROM artist WHERE ArtistName='$artist'";
      $ret=mysql_query($sql,$con);
      $res=mysql_fetch_array($ret);
      $aid="{$res[0]}";
      
      $sql="SELECT * FROM category WHERE CategoryName='$category'";
      $ret=mysql_query($sql,$con);
      $res=mysql_fetch_array($ret);
      $cid="{$res[0]}";
      
      $sql="INSERT INTO product(PID,CID,ArtistId,ProductName,Size,Price,In_Hand)values('$code','$cid','$aid','$name','$size','$price',100)";
      $ret=mysql_query($sql,$con);
      if($ret)
      {
          echo "Successfully Add New Product";
      echo "<form action='manage.php' method='post'>
      <input type='submit' value='Go Back Main Menu'></form>";
      $_SESSION['code']="$code";
     ?> <form action="productupload.php" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
<input type="file" name="photo" class="form-control">
<button class="btn btn-secondary">Upload</button>
</div>
</form>
<?php
      }
      else
      {
          echo "Something Wrong".mysql_error();
      }
  }
?>
