<html>

    <head>
        <title>k-store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="lo.css">
      <style>
          .nav-item{
              float: right;
              text-align: right;
              margin-left: 4%;
          
          }
          .navbar-nav{
              margin-left: 66%;color: #fcf6f5ff;
          }.ll{
              background-color: #990011ff;
              box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          }
          .nav-link{
              font-family: 'Lato', sans-serif;
          }
          .login{
            margin-top:2%;margin-left: 13%;
          }
          .bgf{
    border:1px solid white ;
    background-color:white;
    border-radius:5px ;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    display:block;
    margin-left:auto;
    margin-right:auto;
    width: 28%;height: 88px;
}

      </style>
      </head>
      <body>
                <!-- error message -->   
      <?php if(isset($_GET['incorrect'])):?>
<div class="bgf">
<p style="text-align:center;margin-top:25px;color:red">something wrong in login</p>
</div>
<?php endif ?>       
                      <h2 style="text-align:center">Admin Login</h2>
       
        <div class="login">

            <div class="container">
                <div class="row">

                  <div class="col-4">
                    <img src="g.jpg" width="120%;">
                  </div>
                  <div class="col-6" style="background-color: lavender;">
                    <form action="Admin/Logincheckadmin.php" method="post">

                      
                       <input type="text" name="aname" 
                       id="yourmail" 
                      
                       class="form-control" placeholder="name" required>
                      <input type="password" name="pass" id="yourpwd"
                        class="form-control" placeholder="password"
                        required>
                      
                        
                        <button class="button-18 f" role="button" type="submit"
                        onclick="return lohin()" name="">Login</button>
                        
                       
                   
                        </form>
                </div>
                </div>
              </div>
        </div>
                                   
               
            
   <?php
   
             /* <script>
            function lohin(){
               //var a=document.getElementById("name");
               // var b=document.getElementById("ph");
                var c1=document.getElementById("yourmail");
                var d1=document.getElementById("yourpwd");
                //var e=document.getElementById("cp");
               // var regName = /\d+$/g;  var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
               // var regPhone=/^\d{11}$/; 
                if(c1.value==""||regEmail.test(c)){
                  alert("Please enter your mail properly");
                  return false;
                }
               
                if(d1.value==""||d1.value!=e){
                  alert("Please enter your password");
                  return false;
                }
                else{
                    window.location("home.html");
                }
            }
        </script>
        */ 
    
        ?>
      </body>
</html>