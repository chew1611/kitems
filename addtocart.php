<?php
session_start();
if(!(isset($_SESSION["user"])))
{
 header("location: existuser.php");
}
else{
    if(!isset($_SESSION['cart']))
{
$_SESSION['cart']=array();
}
unset($_SESSION["qty_cart"]);

?>
<html>

<head>

   
                                                                                                         <title>k-store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">                                                                         </meta>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="s1.css">
    <link rel="stylesheet" href="style.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href=
"https://unpkg.com/@primer/css@^18.0.0/dist/primer.css" />   
  

  
  <style>
  body{
      
            background: lavender;

  }
  
          .border{
              border:1px solid black ;
              font-family: serif;
              
              width:100%;
              display:block ;
              margin-left: auto;
              margin-right: auto;
              margin-top: 30%;
              border-radius:3px;
              height: 256px;
              background-color: pink;
              box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          
          }
  
               button:focus,
input:focus{
  outline: none;
  box-shadow: none;
}
a,
a:hover{
  text-decoration: none;
}

/*--------------------------*/
.qty-container{
  display: flex;
  align-items: center;
  justify-content: center;
}
.qty-container .input-qty{
  text-align: center;
  padding: 6px 10px;
  border: 1px solid #d4d4d4;
  max-width: 80px;
}
.qty-container .qty-btn-minus,
.qty-container .qty-btn-plus{
  border: 1px solid #d4d4d4;
  padding: 10px 13px;
  font-size: 10px;
  height: 38px;
  width: 38px;
  transition: 0.3s;
}
.qty-container .qty-btn-plus{
  margin-left: -1px;
}
.qty-container .qty-btn-minus{
  margin-right: -1px;
}


/*---------------------------*/
.btn-cornered,
.input-cornered{
  border-radius: 4px;
}
.btn-rounded{
  border-radius: 50%;
}
.input-rounded{
  border-radius: 50px;
}
.col{
    background-color: lavender;
}
  </style>
  </head>

<body>
                    
           <div class="anim-fade-up">

    
    
    <div class="container text-center">
    <?php
    include("Database/cus.php");
$name=$_POST["id"];
$sql="SELECT * FROM product WHERE PID='$name'";
   $ret=mysql_query($sql,$con);
   $res=mysql_fetch_array($ret);
   ?>
   <form action="addtocart2.php" method="post">
<input type="text" hidden name="id" value=<?php echo "{$res[0]}" ?>>
  <div class="row">
    <div class="col" style="background-color:lavender">
      <img src=<?php echo "{$res[1]}"  ?> style="width:80%;margin-top:3%">
    </div>
    <div class="col">
       <div class="border">
       
       
             <h3 style="text-align:center;margin-top:13px">  <?php
   echo "{$res[4]}"
?></h3>
             
             <p style="text-align:center"> Price : 
                 <?php echo "{$res[6]}" ?>
                                  <br>  
                 
             </p>
             <h6 style="text-align:center">Quantity</h6>
              <div class="qty-container">
                <button class="qty-btn-minus btn-primary btn-rounded mr-1" type="button"><i class="fa fa-chevron-left"></i></button>
                <input type="text" name="qty" value="1" class="input-qty input-rounded"/>
                <button class="qty-btn-plus btn-primary btn-rounded ml-1" type="button"><i class="fa fa-chevron-right"></i></button>
            </div> 
            
            
            
            <button type="submit"  class="btn btn-primary" style="display:block;
            margin-left:auto;margin-right:auto;margin-top:2%">Add to Order</button>
                                                                   </form>
                     </div>
    </div>
  </div>
 
</div>
    
          </div>
    
         
     <?php }
      
     ?>

            
            <script>
            
                var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 1) {
    $n.val(amount-1);
  }
});
            </script>
</body>


       
</html>