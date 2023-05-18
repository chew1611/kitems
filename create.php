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
          

          @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}


*{
    box-sizing: border-box;
}

body{

    background-color: pink;
    font-family: 'Open Sans', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
}

.container{
    background-color: skyblue;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    width: 400px;
}

h2{
    text-align: center;
    margin: 0 0 20px;
}

.form{
    padding: 30px 40px;
}

.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label{
    color:#777;
    display: block;
    margin-bottom: 5px; 
}
 
.form-control input
{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;   
}

.form-control input:focus{
    outline: 0;
    border-color: #777;

}

.form-control.success input {
    border-color: var(--succes-color);
}

.form-control.error input {
    border-color: var(--error-color);    
}

.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{
    visibility: visible;
}
.form button {
    cursor: pointer;
    background-color: #3498db;
    border: 2px solid #3498db;
    border-radius: 4px;
    color: #fff;
    display: block;
    padding: 10px;
    font-size: 16px;
    margin-top:20px;
    width:100%;
}
      </style>
      </head>
      <body>

      <div class="container">
        <form id="form" class="form" action="DataBase/insert.php" method="post">
            <h2>Register With Us</h2>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Username"
                name>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email"
                name="mail">
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password"
                name="pwd">
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" placeholder="Enter password again">
                <small>Error Message</small>
            </div>
            
            
            <select class="form-select" aria-label="Default select example">
  <option selected>Select your city</option>
  <?php
  $con=mysql_connect("localhost","root","");
  $selectDb=mysql_select_db("testing2",$con);
  $sql="SELECT * FROM mm";
  $ret=mysql_query($sql,$con);
  while($res=mysql_fetch_array($ret)){  ?>
  <option value="1"><?php echo "{$res[0]}" ?></option>
                       <?php } ?>
  </select>
            
             <button class="button-18 f" role="button" type="submit"
                         name="submit">Create account</button>
                        <a href="existuser.php" style="text-align: center;">Login</a>
        </form>    
    </div>
    
    <script>
    
             const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//show success colour
function showSucces(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

//check email is valid
function checkEmail(input) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(input.value.trim())) {
        showSucces(input)
    }else {
        showError(input,'Email is not invalid');
    }
}


//checkRequired fields
function checkRequired(inputArr) {
    inputArr.forEach(function(input){
        if(input.value.trim() === ''){
            showError(input,`${getFieldName(input)} is required`)
        }else {
            showSucces(input);
        }
    });
}


//check input Length
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} must be les than ${max} characters`);
    }else {
        showSucces(input);
    }
}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// check passwords match
function checkPasswordMatch(input1, input2) {
    if(input1.value !== input2.value) {
        showError(input2, 'Passwords do not match');
    }
}


//Event Listeners
form.addEventListener('submit',function(e) {
    e.preventDefault();

    checkRequired([username, email, password, password2]);
    checkLength(username,3,15);
    checkLength(password,6,25);
    checkEmail(email);
    checkPasswordMatch(password, password2);
});
    </script>
      </body>
</html>