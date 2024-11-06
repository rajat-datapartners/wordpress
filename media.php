<?php include 'header.php'; ?>

<?php
  include('admin/includes/config.php');
 
  $sql = "SELECT * FROM news where id != '1' AND deleted != 1";
  $result=mysqli_query($con, $sql);
// echo '<pre>'; print_r($result);exit;

  $sql_first = "SELECT * FROM news where id ='1' AND deleted != 1";
  $result_first=mysqli_query($con, $sql_first);
 ?>

  <!--  Breadcrumbs  -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center mission">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>News & Updates</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="text-light">News & Updates</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->
  
  
<!--  Recent Blog Posts Section  -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        
     <div class="container">

      <?php 
          if(mysqli_num_rows($result_first) > 0) {
            while($row_first = mysqli_fetch_assoc($result_first)) {

          ?>

        <div class="row">
            <article>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="news-box">
                            <img src="admin/postimages/<?= $row_first['image']; ?>" alt="" class="img-fluid" style="width:500px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overlay-text">
                            <h2 class="title align-top">
                                <a href="#"><?= $row_first['title']; ?></a>
                            </h2>
                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-author test_desc"><?= $row_first['description']; ?></p>
                                </div>
                            </div>
                            <br>
                            <a href="news_details?sr_no=<?= $row_first['id']; ?>" class="btn btn-primary text-light float-end">Read More</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
         <?php 
              }
            } 
          ?>

    </div>
       <br> 
       <br>
       
       <!----Blogs  first 3 Row------->
        <div class="row gy-4">


    
          <?php
            if(mysqli_num_rows($result) > 0) {
              foreach ($result as $key => $value) { ?>

                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <img src="admin/postimages/<?= $value['image']; ?>" class="" style="height:267px;" alt="...">
                      <div class="container mt-3">
                        <h5 class="card-title" ><?= $value['title']; ?></h5>
                        <p class="card-text test_desc"><?= $value['description']; ?></p>
                      </div>
                    </div>

                    <div class="card-footer" style="border-top:none; background-color: var(--light-color);">
                      <a href="news_details?sr_no=<?= $value['id']; ?>" class="btn btn-primary text-light float-end">Read More</a>
                    </div>


                  </div>

                </div>
            <?php   
              }
            }   
          ?>

         
        </div><!-- End recent posts list -->

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->


<?php include 'footer.php'; ?>