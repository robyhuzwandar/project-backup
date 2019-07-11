<!DOCTYPE html>
<html>
<head>
    <title>Event</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="icon" type="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/sticky-footer-navbar.css">
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-color: #FFFFFF  !important;" >
<!--  #008080
#3b5998 -->

<div class="container-fluid" >
  


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
         <a  class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Gallery</a>

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

     <!--  <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
 -->
    </ul>

     <form class="form-inline my-2 my-lg-0">
    <!-- 
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      <a href="Login.php"class="btn btn-outline-light btn-lg my-2 my-sm-0"  type="submit" style="font-size: 15px; color: grey; border-color: grey;"><b>LOGIN</b></a> 
      &nbsp;&nbsp;  
      <a href="Signup.php" class="btn btn-outline-light btn-lg my-2 my-sm-0" type="submit" style="font-size: 15px; background-color: #20B2AA; color: white;" ><b>SIGN UP</b></a>

    </form>

   </div>
</div>
</nav>


<article class="card-post" >
  <div class="container">
    <div style="margin-left: 400px; margin-top: 20px;">
       <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search Event" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <br/>
    <br/>    



    <div class="row">
      <div class="col-md-4 mb-4 d-flex">
        <div class="card card-shadow">

        <a href="detailOH.php">
        <img class="card-img-top lazyloaded" src="img/OH.png" data-src="img/OH.jpg" alt="" width="600" height="400" >
        </a>

        <div class="card-body" style="width: 20rem; padding-bottom: 4px;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style=" font-size: 11px; font-family: Century Gothic; color: grey !important;"> E V E N T</a><br/>

          <a class="text-dark" href="detailOH.php">Open House Mahasiswa Baru</a>
          &nbsp; &nbsp;  &nbsp; &nbsp;

          <div class="event-company" style="color: grey; font-size: 15px; color: darkturquoise;"><span class="fa fa-calendar"></span>&nbsp;&nbsp;Jan 18, 2018</div>

          <div class="event-location" style="color: grey; font-size: 15px; margin-left: 3px;"><span class="fa fa-map-marker"></span>&nbsp;&nbsp;Mataram, Lombok, NTB</div>
          </h5>
          <a href="detailOH.php" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#" style="margin-left: 200px; margin-top: -80px;">Lihat Detail</a>
        </div>

      </div>
    </div>


     
      <div class="col-md-4 mb-4 d-flex">
        <div class="card card-shadow">

        <a href="#">
        <img class="card-img-top lazyloaded" src="img/TECH.png" data-src="img/TECH.jpg" alt="" width="600" height="400" >
        </a>

        <div class="card-body" style="width: 20rem; padding-bottom: 4px;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style=" font-size: 11px; font-family: Century Gothic; color: grey !important;"> E V E N T</a><br/>

          <a class="text-dark" href="#">Tech Talk PC</a>
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
          <div class="event-company" style="color: grey; font-size: 15px; color: darkturquoise;"><span class="fa fa-calendar"></span>&nbsp;&nbsp;Jan 18, 2018</div>

          <div class="event-location" style="color: grey; font-size: 15px; margin-left: 3px;"><span class="fa fa-map-marker"></span>&nbsp;&nbsp;Mataram, Lombok, NTB</div>
          </h5>
          <a href="#" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#" style="margin-left: 200px; margin-top: -80px;">Lihat Detail</a>
        </div>

      </div>
    </div>



     </div>
    </div>
  </div>
</div>
</article>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>




<footer class="footer" style="background-color: #FFFFFF; ">
      <div class="container">
        <span class="text-muted">Copyright &copy; 
        <a style="color: mediumseagreen;">Programming Community.<a> All rights reserved.</span>
       
        <span class="text-muted" href="#"><a style="color: mediumseagreen; margin-left: 250px;">About<a></span>
        &nbsp;
        &nbsp;
        <span class="text-muted"><a style="color: mediumseagreen; ">Term & Condition <a></span>
        &nbsp;
        &nbsp;
        <span class="text-muted"><a style="color: mediumseagreen;"> Contact Us  <a></span>
        &nbsp;
        &nbsp;
        <span class="text-muted"><a style="color: mediumseagreen; ">Credit  <a></span>
        &nbsp;
        &nbsp;
        <span class="text-muted"><a style="color: mediumseagreen; ">Store<a></span>
      </div>
</footer>





      <script src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.min.js"></script>

</body>
</html>