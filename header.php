<?php
  
  include('admin/includes/config.php');

  $sql_setting = "SELECT * FROM settings where status != '0'";
  $setting_result=mysqli_query($con, $sql_setting);
  $settings = mysqli_fetch_assoc($setting_result);
// echo '<pre>'; print_r($settings);exit;

 ?>
<!DOCTYPE html>
<html lang="zxx">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Cellverse Pvt Ltd</title>
  <meta content="" name="Reinventing Preclinical Drug Discovery: Moving towards animal free Drug Discovery">
  <meta name="description" content="Reinventing Preclinical Drug Discovery:Moving towards animal free Drug Discovery">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="ZRTHEMES">

  <!-- Favicons -->
  <link href="admin/settings/<?= $settings["favicon_image"]; ?>" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&amp;display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/stylesheets/styles.css" rel="stylesheet">

<style>
.news-box {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  /*overflow: hidden;*/
  border-radius: 8px;
}

#neonShadow{
  /*height:50px;*/
  width:100px;
  border:none;
  border-radius:50px;
  transition:0.3s;
  background-color:rgba(156, 161, 160,0.3);
  animation: glow 1s infinite ;
  transition:0.5s;
}

#neonShadow:hover{
  transform:translateX(-20px)rotate(30deg);
  border-radius:5px;
  background-color:#c3bacc;
  transition:0.5s;
}

@keyframes glow{
  /*0%{*/
  /*box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168);}*/
  
50% {
    box-shadow: 2px 2px 5px rgb(255, 215, 0), -1px -1px 12px rgb(255, 215, 0);
}
  /*100%{*/
  /*box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168)*/
  /*}*/
}





</style>
</head>

<body>

  <header id="header" class="header d-flex align-items-center sticked stikcy-menu">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="max-width: 1453px;">
      <a href="index" class="logo d-flex align-items-center">
        <img src="admin/settings/<?= $settings["top_logo"]; ?>" alt="logo" class="logo_size">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index" class="">Home</a></li>
          <!--<li><a href="" class="">About</a></li>-->
          
               <li><a href="about" class="">About</a></li>
                <li><a href="people">People</a></li>
               
            <!--  <div class="dropdown">-->
            <!--  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
            <!--    About-->
            <!--  </a>-->
            
            <!--  <ul class="dropdown-menu">-->
            <!--    <li><a class="dropdown-item" href="motivation">MOTIVATION</a></li>-->
            <!--    <li><a class="dropdown-item" href="vision">VISION</a></li>-->
            <!--    <li><a class="dropdown-item" href="mission">MISSION</a></li>-->
            <!--    <li><a class="dropdown-item" href="team_new">TEAM</a></li>-->
            <!--  </ul>-->
            <!--</div>-->
            <!--</li>-->
          
          <!--<li><a href="" class="">Technology Platform</a></li>-->
          <li><a href="product.php" class="">Product</a></li>
          <li><a href="innovation.php" >Innovation</a></li>
          <li><a href="commitment.php" >Commitment</a></li>
          <!--<li><a href="media.php">Media</a></li>-->
          <!--<li><a href="">Contact Us</a></li>-->
         
          <!--<li><a href="#">Contact Us</a></li>-->
          <li><a href="hiring.php" style="margin-left: 25px; padding: 7px;" id="neonShadow"> <b style="margin-left: 20px;">Hiring</b></a></li>
          
          
          <!--<li><a href="portfolio.php" class="">People</a></li>-->
          <!--<li><a href="testimonials.php" class="">Product</a></li>-->
          <!--<li><a href="team.php" class="">Innovations</a></li>-->
          <!--<li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a href="about.html">About</a></li>-->
          <!--    <li><a href="packages.html">Pricing</a></li>-->
          <!--    <li><a href="faqs.html">FAQs</a></li>-->
          <!--    <li><a href="privacy-policy.html">Terms &amp; Conditions</a></li>-->
          <!--    <li><a href="privacy-policy.html">Privacy Policy</a></li>-->
          <!--    <li><a href="blogs.html">Blogs</a></li>-->
          <!--    <li><a href="blog-details.html">Blog Detail Page</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li><a href="blogs.php">Commitment</a></li>-->
          <!--<li><a href="blogs.php">Blogs</a></li>-->
        </ul>
      </nav><!-- .navbar -->
      <!--<a href="contact.html" class="btn-get-started hide-on-mobile">Get Quotes</a>-->
      <button id="darkmode-button"><i class="bi bi-moon-fill"></i></button>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>