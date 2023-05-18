

<html>
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href=
"https://unpkg.com/@primer/css@^18.0.0/dist/primer.css" />   
<style>
           body{
               font-family: serif;
               background:pink;
           }
      .bor{
      background-image:url('g.jpg');
      border:1px solid skyblue;
  background: skyblue;
  border-radius:5px;
  width:50%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  height:180px ;
  margin-top: 60px;
      }
      </style>
</head>
<body>                 
<div class="anim-fade-up">

<form action="adminrole.php" method="post" class="bor">

 

<div class="container text-center" style="margin-top:3%">
  <div class="row align-items-center">
                          <h3 style="tex-align:center;
                        ">Welcome Admin</h3><br><br><br>
    <div class="col">
<input type="submit" name="submit1" value="Manage Accessories" 
  class="btn btn-info"
  
  
  
  >
    </div>
    <div class="col">
     <input type="submit" name="submit2" value="Manage Artist List" class="btn btn-info">
    </div>
    <div class="col">
<input type="submit" name="submit3" value="View Order" class="btn btn-info">
    </div>
  </div>
</div>
</form>
</div>
<?php
  
?>
</body>
</html>