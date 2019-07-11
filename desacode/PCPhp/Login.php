<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="icon" type="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/sticky-footer-navbar.css">

    <title>Login</title>

  </head>

  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-color: #FFFFFF  !important;" >
<!--  #008080
#3b5998 -->

<div class="container-fluid">
  


   <a class="navbar-brand" href="index.php" style="font-family: verdana; color: black; font-size: 27px;"> <img src="img/Logo.jpg" 
  class="d-inline-block align-top rounded-circle" alt="Logo" width="40" height="40"> <b>PC</b>Bumigora</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: grey !important;">Home <span class="sr-only">(current)</span></a>
         
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Berita</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Artikel.php">Artikel</a>
      </li>

      <li class="nav-item">
         <a href="gal.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Gallery</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 450px; ">
            <a href="#" class="dropdown-item" target="_blank">Seminar</a>
            <a href="#" class="dropdown-item">Workshop</a>
            <a href="gal_techtalk.php" class="dropdown-item">Tech Talk</a>
            <a href="gal_openhouse.php" class="dropdown-item">Open House</a>

          </div>
      </li>

      <li class="nav-item">
         <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Profil</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 524px;">
            <a href="#" class="dropdown-item" target="_blank">Visi & Misi</a>
            <a href="#" class="dropdown-item">Struktur Organisasi</a>
            <a href="#" class="dropdown-item">Mentor</a>
          </div>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="event.php">Event</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Unduh</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
    <!-- 
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      <a href="Login.php"class="btn btn-outline-light btn-lg my-2 my-sm-0"  type="submit" style="font-size: 15px; color: grey; border-color: grey;"><b>LOGIN</b></a> 
      &nbsp;&nbsp;  
      <a href="Signup.php"class="btn btn-outline-light btn-lg my-2 my-sm-0" type="submit" style="font-size: 15px; background-color: #20B2AA; color: white;" ><b>SIGN UP</b></a>

    </form>

   </div>
</div>
</nav>

<div class="container" style="margin-top: -22px;">
   <center><a class="navbar-brand" href="index.php" style="font-family: verdana; color: black; font-size: 27px;"> <img src="img/Logo.jpg" class="d-inline-block align-top rounded-circle" alt="Logo" width="30" height="30"> <b>PC</b>Bumigora</a></center><br/>

   <h6 style="font-family: verdana; margin-left: 500px;">Account / Login</h6>

    <div class="col-md-4 col md-offset-4" style="margin-left: 370px;"> 
        <p>Username</p>   
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br/>

        <p>Password</p> 
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br/>

      <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
      </div><br/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br/>

        <p style="margin-left: 100px;">Or Connect With :</p>
        <center>
        <a class="navbar-brand" href="#"><img src="img/facebook(1).png" class="d-inline-block align-top rounded-circle" alt="facebook(1)" width="40" height="40"></a>
        <a class="navbar-brand" href="#"><img src="img/instagram(1).png" class="d-inline-block align-top rounded-circle" alt="instagram(1)" width="40" height="40"></a>
        <a class="navbar-brand" href="#"><img src="img/google-plus(1).png" class="d-inline-block align-top rounded-circle" alt="google-plus(1)" width="40" height="40"></a>
        <br/>
        <p>Forgot password?<a href=""> Click here to reset</a><br/>
        New User?<a href=""> Click here to register</a></p>
       
        </center>

    </div>
</div> <!-- /container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

  </body>
</html>
