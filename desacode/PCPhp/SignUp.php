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

    <title>Sign Up</title>

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
      <a class="btn btn-outline-light btn-lg my-2 my-sm-0" type="submit" style="font-size: 15px; background-color: #20B2AA; color: white;" ><b>SIGN UP</b></a>

    </form>

   </div>
</div>
</nav>

<section class="content-wrapper">
    <div class="container">
        <div class="row">
              <div class="col-md-4 col-md-offset-4" style="margin-left: 370px;">
                  <!-- AUTH WRAPPER -->
                <div class="auth-wrapper">
                    <div class="auth-logo">
                      <center><a class="navbar-brand" href="index.php" style="font-family: verdana; color: black; font-size: 27px;"> <img src="img/Logo.jpg" class="d-inline-block align-top rounded-circle" alt="Logo" width="30" height="30"> <b>PC</b>Bumigora</a></center>
                     </div><br/>

                      <h6 style="font-family: verdana; margin-left: 100px;">Account / Register</h6>

                  <form class="form-horizontal" role="form" method="POST" action="">
                        <input name="_token" value="" type="hidden">
 
                        <fieldset>
                              <div class="form-field">
                                 <label for="log">Username</label>
                                  <input name="user_login" value="" class="form-control" type="text">
                               </div>

                                <div class="form-field">
                                   <label for="email">Email</label>
                                   <input name="user_email" value="" class="form-control" type="text">
                                 </div>

                                 <div class="form-field">
                                    <label for="name">Name</label>
                                    <input name="name" value="" class="form-control" type="text">
                                 </div>

                                  <div class="form-field">
                                    <label for="pwd">Password</label>
                                    <input name="password" id="password" class="form-control" type="password">
                                  </div>

                                  <div class="form-field">
                                        <label for="pwd">Confirm Password</label>
                                        <input name="password_confirmation" id="password" class="form-control" type="password">
                                  </div><br/>
<center>

    <script type="text/javascript">
        var RecaptchaOptions = {"curl_timeout":1,"curl_verify":true};
    </script>

<script src="https://www.google.com/recaptcha/api.js?render=onload"></script>
  <div class="g-recaptcha" data-sitekey="6LcvfB0UAAAAADlcOp1MohJjCctcPvX5KbVQEIqe">
    <div style="width: 304px; height: 78px;">
      <div>
        <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcvfB0UAAAAADlcOp1MohJjCctcPvX5KbVQEIqe&amp;co=aHR0cHM6Ly93d3cuY29kZXBvbGl0YW4uY29tOjQ0Mw..&amp;hl=en&amp;v=v1514934548259&amp;size=normal&amp;cb=ybmfv1xt5rw4" role="presentation" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0">
        </iframe>
      </div>
        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; ">
        </textarea>
    </div>
  </div>

<noscript>
    <div style="width: 302px; height: 352px;">
        <div style="width: 302px; height: 352px; position: relative;">
            <div style="width: 302px; height: 352px; position: absolute;">
                <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LcvfB0UAAAAADlcOp1MohJjCctcPvX5KbVQEIqe"
                        frameborder="0" scrolling="no"
                        style="width: 302px; height:352px; border-style: none;">
                </iframe>
            </div>
            <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0; padding: 0; resize: none;"></textarea>
            </div>
        </div>
    </div>
</noscript></center><br/>


             <div class="form-button">
                 <input value="Register" class="btn btn-primary btn-lg btn-block" type="submit">
              </div><br/>


                <div class="form-auth-socmed" >
                      <p style="margin-left: 100px;">Or Connect With :</p>
                      <div class="auth-socmed-icon" style="margin-left: 83px; ">
                        <a class="navbar-brand" href="#"><img src="img/facebook(1).png" class="d-inline-block align-top rounded-circle" alt="facebook(1)" width="40" height="40"></a>
                        <a class="navbar-brand" href="#"><img src="img/instagram(1).png" class="d-inline-block align-top rounded-circle" alt="instagram(1)" width="40" height="40"></a>
                        <a class="navbar-brand" href="#"><img src="img/google-plus(1).png" class="d-inline-block align-top rounded-circle" alt="google-plus(1)" width="40" height="40"></a>
                        <br/>
                      </div>
                </div><br>

            <div class="text-center">
                 <div>Forgot password?&nbsp;<a href="#">Click here to reset</a></div>
                 <div>Have an Account?&nbsp;<a href="login.php">Click here to login</a></div>
            </div>

      </fieldset>
  </form>


        </div>
                        <!-- END: AUTH WRAPPER -->
            </div>
                </div>

            </div>  
        </section>




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
