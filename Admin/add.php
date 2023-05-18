<?php
  
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
Add new Artist Form
*/
if(isset($_POST["addartist"])){
$id=$_POST["AID"];
  $name=$_POST["Aname"];
$sql="INSERT INTO artist(ArtistId,ArtistName)values('$id','$name')";
$ret=mysql_query($sql,$con);
if($ret)
{
    header("location: addcomplete.php");
}
else{
    header("location: addnew.php?incorrect=1");
}
}
/*
Add Category Form
*/
if(isset($_POST["addcategory"])){
$CID=$_POST["CID"];
$Cname=$_POST["Cname"];
$sql="INSERT INTO category(CID,CategoryName)values('$CID','$Cname')";
$ret=mysql_query($sql,$con);
if($ret)
{
    header("location: addcomplete.php");
}
else
{
    header("location: addnew.php?incorrect=1");
}
}
?>
