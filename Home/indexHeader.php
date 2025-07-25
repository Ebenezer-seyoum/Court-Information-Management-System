<?php
  session_start();
  //error_reporting(0);
  include '../Court-Information-Management-System/connection/connection.php';
  include '../Court-Information-Management-System/connection/function.php';
  ?>
<!DOCTYPE html>
<html lang="en">
 <head>

   <meta charset="utf-8">
   <title>Yeki Woreda Court</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
	<link rel="icon" href="Home/assets/img/icon.png" type="image/x-icon"/>
   <meta content="" name="keywords">
   <meta content="" name="description">
   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">  
   <!-- Icon Font Stylesheet -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <!-- Font Awesome (latest via CDN) -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <!-- Libraries Stylesheet -->
   <link rel="stylesheet" href="Home/assets/lib/animate/animate.min.css"/>
   <link href="Home/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <!-- Customized Bootstrap Stylesheet -->
   <link href="Home/assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- Template Stylesheet -->
   <link href="Home/assets/css/style.css" rel="stylesheet">
  </head>
<body>

<div class="container-fluid header-top">
  <div class="nav-shaps-2"></div>
   <div class="container d-flex align-items-center">
    <div class="d-flex align-items-center h-100">
      <a href="#" class="navbar-brand" style="height: 125px;">
      <h1 class="text-white mb-4"><i class="fas fa-scale-balanced text-primary me-2"></i> YWC</h1>
      </a>
    </div>
<div class="w-100 h-100">
  <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
   <div class="row gx-0 align-items-center">
    <div class="col-lg-8 text-center text-lg-center mb-lg-0">
      <div class="d-flex flex-wrap">                 
    </div>
  </div>
<div class="col-lg-4 text-center text-lg-end">
  <div class="d-flex justify-content-end align-items-center">
<!-- Language selection -->
  <div class="dropdown me-3">
    
      
    
    </div>
   </div>
  </div>
 </div>
</div>
<div class="nav-bar px-0 py-lg-0" style="height: 80px;">
  <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
    <a href="#" class="navbar-brand-2">
    <h1 class="text-primary mb-0"><i class="fas fa-gavel me-2"></i> YMC</h1>
    </a> 
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
 <div class="navbar-nav mx-0 mx-lg-auto">
   <a href="index.php" class="nav-item nav-link active">Home</a>
   <a href="about.php" class="nav-item nav-link">About</a>
  <div class="nav-item dropdown">
    <a href="#" class="nav-link" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">case Services</span>
    </a>
  <div class="dropdown-menu">
      <a href="daily_trial.php" class="dropdown-item">Daily Court Trial schedule</a>
      <a href="case_tracker.php" class="dropdown-item">Case tracker</a>
  </div>
 </div>
    <a href="contact.php" class="nav-item nav-link">Contact</a>
    <div class="nav-btn ps-3">         
        <a href="login.php" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> <span>LOGIN</span></a>
    </div>
    <div class="nav-shaps-1"></div>
    </div>
  </div>
</nav>
  </div>
     </div>
   </div>
</div>

         