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

      </style>
      </head>
      <body>
        <div class="login">

            <div class="container">
                <div class="row">

                  <div class="col-4">
                    <img src="g.jpg" width="120%;">
                  </div>
                  <div class="col-6" style="background-color: lavender;">
                    <form action="home.html" method="post">

                       <input type="text" name="name" id="name" placeholder="name"
                       class="form-control">
                    <input type="text" name="ph" id="ph" pattern="[0-9]{11}"
                    class="form-control" placeholder="PhoneNo:">
                       <input type="text" name="mail" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                       class="form-control" placeholder="email">
                      <input type="password" name="pwd" id="pwd"
                        class="form-control" placeholder="create password">
                      <input type="password" name="cp" id="cp" placeholder="confirm password"
                        class="form-control">
                        
                        <button class="button-18 f" role="button" type="submit"
                        onclick="return validate()">Create account</button>
                        <a href="#" style="text-align: center;">Login</a>
                        </form>
                </div>
                </div>
              </div>
        </div>
        <script>
            function validate(){
                var a=document.getElementById("name");
                var b=document.getElementById("ph");
                var c=document.getElementById("mail");
                var d=document.getElementById("pwd");
                var e=document.getElementById("cp");
                var regName = /\d+$/g;  var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
                var regPhone=/^\d{11}$/; 
                if(a.value=="" || regName.test(a)){
                  alert("Please enter your name properly");
                  return false;
                }if(c.value==""||regEmail.test(c)){
                  alert("Please enter your mail properly");
                  return false;
                }
                if(d.value != e.value || d.value=="" || e.value==""){
                    alert("Not equal");
                    return false;
                }
                if(b.value==""){
                    alert("Please correct your phone");
                    return false;
                }
                else{
                    window.location("home.html");
                }
            }
        </script>
      </body>
</html>