<?php include 'header.php'; ?>

<?php
  
  $id = $_GET['sr_no'];

  $conn = mysqli_connect("localhost", "cellvers_wp755", "m1.SwG1(p7", "cellvers_new") or die("connection failed");
 
  $sql = "SELECT * FROM news where id='$id'";
  $result = mysqli_query($conn, $sql) or die("Query unsuccessful: " . mysqli_error($conn));
// echo '<pre>'; print_r($result);exit;
 ?>

  <!--  Breadcrumbs  -->
   <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center mission">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>News</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="text-light">News Details</li>
        </ol>
      </div>
    </nav>
  </div>
  
  
  <!-- End Breadcrumbs -->

  <main id="main">

    <section class="single-page">
      
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-12">
              <?php 
              if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

              ?>
                <div class="col-lg-12">
                  <img src="admin/postimages/<?= $row['image'] ?>" class="img-fluid rounded-4 mb-4" alt=""><br>
                  
                </div>
               
                <h3 class="card-title"><?= $row['title'] ?></h3><br>
               
                <p><?= $row['description'] ?></p>

              <?php 
                }
              } 
              mysqli_close($conn);
              ?>
          </div>
 </section>

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>