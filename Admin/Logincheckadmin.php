<?php
  
  $name=$_POST["aname"];
  $pass=$_POST["pass"];
  
  
  if($name == 'Thu Yein'  and $pass == '0987')
  {
      header('location: manage.php');
  }
  else
  {
      header('location: adminLogin.php?incorrect=1');
  }
?>
