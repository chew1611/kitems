<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die('Could not connect'.mysql_error());
}     
if(mysql_query("CREATE DATABASE phpproject",$con)){
	echo "Database created";
}
else{
	echo "Error creating".mysql_error();

}
mysql_close();
?>