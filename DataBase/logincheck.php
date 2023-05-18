<?php
session_start();
  
                          if(isset($_POST["submit1"]))
                          {
                              
              $con=mysql_connect("localhost","root","");
                   if(!con)
                   {
                       Die("Cannot connect database");
                   }
                   
                   $selectDb=mysql_selectdb("kpop",$con);
                   if(!$selectDb)
                   {
                       Die("Cannot use database");
                   }
                   $mail=$_POST["yourmail"];
                   $pass=$_POST["yourpwd"];
                   
              $sql="SELECT * FROM customer WHERE Email='$mail' AND Password='$pass'";
                   $ret=mysql_query($sql,$con);
                   if($res=mysql_fetch_array($ret))
                   {
                       $_SESSION["user"]="{$res[0]}";
                       header("location: ../home.php");
                   }
                   else
                   {
                       header("location: existuser.php");
                   }
                          }
                               
                               
                   ?>

