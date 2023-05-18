<?php
  $con=mysql_connect("localhost:3309","root","");
  if(!$con){
      
      die('Could not connect'.mysql_error());
  }
  $dbname="phpproject";
  $db_selected=mysql_select_db($dbname,$con);
  if(!$db_selected){
      die("Cannot use $dbname".mysql_error());
  }
  else
  {
      echo "connected $dbname";
  }
               if(isset($_POST['submit1'])){
  //$name=$_POST['name'];
  //$ph=$_POST['ph'];
 // $mail=$_POST['mail'];
  $mai=$_POST['yourmail'];
                   $pas = $_POST["yourpwd"];     
  


 $sql = "SELECT email FROM customerlist WHERE eamil = ?";
         $ret=mysql_query($sql,$con);  
          
        if($mai != $ret){
            echo"Login failed",mysql_error();
            header("location: ../home.php")
        }
        else{
            echo"Sucessfully login"    ;
        }

  mysql_close($con);
?>
