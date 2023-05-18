<?php
session_start();
  $error=$_FILES['photo']["error"];
$tmp=$_FILES['photo']["tmp_name"];
$type=$_FILES['photo']["type"];
$con=mysql_connect("localhost:3309","root","");
if(!$con)
{
    Die("cannot connect database");
}
$selectDb=mysql_select_db("testing",$con);
if(!selectDb)
{
    Die("cannot select Db");
}
try{if($error)
{
header("location: ../addnew.php?error=file");
exit();
}
$pid=$_SESSION["code"];
if($type==="image/jpeg" or $type==="image/jpg" or $type==="image/png")
{
    
$dir=move_uploaded_file($tmp,"photos/$pid".".jpg");
$sql="UPDATE product SET ProductImage='photos/$pid.jpg'  WHERE PID='$pid'";
$ret=mysql_query($sql,$con);
header("location: manage.php");
}
else
{
header("location: addnew.php?error=type");
}
}catch(Exception $e)
{
    echo $e;
}
?>
