<?php
session_start();
$error=$_FILES['photo']["error"];
$tmp=$_FILES['photo']["tmp_name"];
$type=$_FILES['photo']["type"];

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
if($error)
{
header("location: profile.php?error=file");
exit();
}
  if($type==="image/jpeg" or $type==="image/jpg"){
      $sql="UPDATE customer SET CustomerImage='actions/photos/$user.jpg' WHERE
      CustomerId='$user'";
      $ret=mysql_query($sql,$con);
move_uploaded_file($tmp,"photos/$user.jpg");      
header("location: ../profile.php");
}
else
{
header("location: ../profile.php?error=type");
}

                                                
?>
