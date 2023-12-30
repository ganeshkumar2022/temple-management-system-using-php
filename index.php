<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online temple management system</title>
    <meta name="description" content="we provide a best online temple management services in chennai,osure,mysore,delhi,mumbai and coimbatore">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/jquery.slim.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>



    <!-- jquery -->
    <script src="assets/jquery/jquery-3.7.1.js" type="text/javascript"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    
    <!-- add icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style2.css">
<style>
html
{
  scroll-behavior: smooth;
}
.myscrollup
{
  display:none;
  padding:12px 15px;
  border-radius:50%;
  color:white;
  background-color:rgb(6,31,89);
  position:fixed;
  right:10px;
  bottom:10px;

}
.myscrollup:hover
{
  color:white;
}
</style>
</head>
<body class="home-page">

<a href="#scrolls-up-o" class="myscrollup"><i class="fa-solid fa-angle-up"></i></a>

<!-- header content start -->
<?php
include("includes/header.php");
?>
<!-- header content end -->


<!-- carousel start -->
<div id="demo" class="carousel slide mycarousel" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/temple5.jpg" alt="temple image" class="caro-img">
      <div class="carousel-caption">
        <h1 class="font-weight-bold caro-title">Temple Management System</h1>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="assets/images/temple2.jpg" alt="temple image" class="caro-img">
    </div>
    <div class="carousel-item">
      <img src="assets/images/temple1.jpg" alt="temple image" class="caro-img">
    </div>
  </div>
</div>
<!-- carousel end -->

<!-- about start -->
<div class="container">
  <div class="row my-5">
    <div class="col-md-6">
      <br>
    <p class="p-content text-secondary">Temple management services encompass a suite of offerings designed to efficiently handle various administrative, financial, and organizational aspects within religious institutions. These services often include donation and membership management, scheduling of events and ceremonies, financial tracking and reporting, inventory upkeep for ritual items, volunteer coordination, communication with devotees, record-keeping, and the facilitation of online presence and donations. By integrating these functionalities into a centralized system, temple management services aim to streamline operations, enhance communication, maintain transparency in financial matters, and ensure a cohesive and organized approach to religious and administrative activities within the temple.
    </p>
    <a href="" class="btn btn-outline-danger px-4 py-2  mt-3 font-weight-bold">View all</a>
  </div>
    <div class="col-md-6">
<img src="assets/images/temple1.jpg" class="temp-img1 img-fluid" alt="temple image">
    </div>
  </div>
</div>
<!-- about end -->
<a name="seva"></a>
<!-- services start-->
<div class="container">
  <h2 class=" text-center seva-tit my-5">We provided sevas are</h2>

  <div class="row">
        <div class="col-md-4">
        <div class="card">
          <img class="card-img-top sevice-img" src="assets/images/aarti.jpeg" alt="aarti">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Aarti</h4>
          </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card" >
          <img class="card-img-top sevice-img" src="assets/images/abishegam.jpg" alt="aarti">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Abishegam</h4>
          </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
          <img class="card-img-top sevice-img" src="assets/images/prasada.jpg" alt="aarti">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Prasada</h4>
          </div>
        </div>
        </div>
  </div>
</div>
<!-- services end -->

<!-- footer content start -->
<?php
include("includes/footer.php");
?>
<!-- footer content end -->

<script>
  $(document).ready(function(){
   $(window).scroll(function(){
    if($(window).scrollTop()>100)
    {
      $(".myscrollup").css("display","inline-block");
    }
    else
    {
      $(".myscrollup").css("display","none");
    }
    
   });
  });
</script>
</body>
</html>