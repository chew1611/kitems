<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial scale=1.0">
<title>Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
    .all{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .b{
        border-radius: 50%;
        width:200px ;height:178px
        
    }
    .list-group-item{
width: 34%;display: block;
        margin-left: auto;
        margin-right: auto;
    }
   img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    body{
        background-color: skyblue;
    }
    </style>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if(!con)
{
    Die("cannot connect database");
}
$selectDb=mysql_select_db("kpop",$con);
if(!selectDb)
{
    Die("cannot select database");
}
$user=$_SESSION["user"];
$sql="SELECT * FROM customer WHERE CustomerId='$user'";
$ret=mysql_query($sql,$con);
 $res=mysql_fetch_array($ret)
?>
<div class="container mt-5">
<h1 class="mb-3"><?php  echo "{$res[2]}"; ?></h1>

<?php if(isset($_GET['error'])):?>
<div class="alert alert-warning">
Cannot upload File
</div>
<?php endif ?>

<?php if(file_exists($res[1])): ?>
<img
class="img-thumbnail mb-3 b"
src="<?php echo $res[1]; ?>"
alt="Profile Photo" width="200px">
<?php endif ?>

<form action="actions/upload.php" method="post" enctype="multipart/form-data">
 
<div class="input-group mb-3">
<div style="display: block;
        margin-left: auto;
        margin-right: auto;">    

<input type="file" name="photo"><i>choose img /jpg</i>
<button class="btn btn-primary">Upload</button>
</div>
</div>
</form>
<ul class="list-group">

<!--Email-->

<li class="list-group-item">
<b>Email:</b><? echo "{$res[3]}"; ?>
</li>

<!--Phone-->

<li class="list-group-item">
<b>Phone:</b> <?php  echo "{$res[4]}"; ?>
</li>

<!--Address--->
<li class="list-group-item">
<b>Address:</b><?php echo "{$res[6]}"; ?>


</li>
<li class="list-group-item">

<a href="actions/logout.php" >Logout</a>


</li>
</ul>
<br>

</div>
</body>
</html>