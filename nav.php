<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    
<style>
    .navbar-nav .nav-link {
  color: #fff;
}
.dropend .dropdown-toggle {
  color: salmon;
  margin-left: 1em;
}
.dropdown-item:hover {
  background-color: lightsalmon;
  color: #fff;
}
.dropdown .dropdown-menu {
  display: none;
}
.dropdown:hover > .dropdown-menu,
.dropend:hover > .dropdown-menu {
  display: block;
  margin-top: 0.125em;
  margin-left: 0.125em;
}
@media screen and (min-width: 769px) {
  .dropend:hover > .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
  }
  .dropend .dropdown-toggle {
    margin-left: 0.5em;
  }
}

</style>
</head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: salmon;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">K-Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Artist
          </a>
          
          <ul class="dropdown-menu">
          <form action="#" method="post">
            <li><a class="dropdown-item" href="bts.php">BTS</a></li>
            <li><a class="dropdown-item" href="blackpink.php">BlackPink</a></li>
        
            
            <li><a class="dropdown-item" href="twice.php">Twice</a></li>
          </form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
                   <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
                 
            <form action="cart.php" method="post">
        <li class="nav-item">
          <a class="nav-link" style="" href="profile.php">

          <img src="cart.png" width="26px">view add to cart
          </a>
        </li>
        </form>
        
        
        
        
        
<li class="nav-item">
          <a class="nav-link" style="" href="profile.php">

          <img src="user.png" width="26px">your profile
          </a>
        </li>




                <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/file:/C:/xampp/htdocs/php%20project/existuser.php?DBGSESSID=-1">Sign in/Signup</a>
        </li>

      </ul>
     
    </div>
  </div>
</nav>


    </body>
</html>
