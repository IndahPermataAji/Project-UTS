<?php
session_start();

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {

	header('location:./../login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Drama Queen</title>

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
   </head>

  <body>
  <div class="jumbotron text-center" style="margin-bottom:0">
<img src ="https://i.postimg.cc/D02f5tbc/dramaqueen2.png" width="300 height="150">
  <p>Menyediakan Berbagai Jenis Drama</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">SELAMAT DATANG MEMBER | Drama Queen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link mr-3" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-3" href="index.php?page=complete/index">Drama Complete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-3" href="index.php?page=ongoing/index">Drama Ongoing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-3 " href="./../logout.php">Logout</a>
      </li>    
    </ul>
  </div>  
</nav>

    <div class="container">

      <?php
      if(!empty($_GET['page'])){
      include('views/'.$_GET['page'].'.php');
      }else{
      echo '<div class="row">
    
    </div>
    <!-- Grid row -->
    
    <!-- Grid row -->
    <div class="gallery" id="gallery">
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://i.postimg.cc/vBDd0fYc/School-2015.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://i.postimg.cc/dVmkFP8G/flower.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://i.postimg.cc/dVmkFP8G/flower.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://i.postimg.cc/3xN8SkK4/goblin.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://i.postimg.cc/3xN8SkK4/goblin.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://i.postimg.cc/vBDd0fYc/School-2015.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->
    
    </div>';
      }
      ?>

    </div> 
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assetsbootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>
