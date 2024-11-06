<?php include 'header.php'; ?>



<?php
  include('admin/includes/config.php');
 
  $sql = "SELECT * FROM jobs where deleted != 1";
  $result=mysqli_query($con, $sql);
// echo '<pre>'; print_r($result);exit;
 ?>
 
 
<style>
   .text{
        font-family: "Merriweather", serif;
    }
   
.p {
  /*position: absolute;*/
  font-size: 25px;
  font-family: sans-serif;
  font-weight: bold;
  transform: translate(-50%, -50%);
  white-space: nowrap;
}

@media only screen and (min-width: 500px) {
  .p {
    font-size: 25px;
  }
}

@media only screen and (min-width: 700px) {
  .p {
    font-size: 40px;
  }
}

.p1 {
  text-shadow: 1px 1px 1px black, -1px -1px 1px black;
  color: cyan;
}

.p2 {
  color: red;
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  animation: text-animation 1s ease-in-out forwards alternate infinite;
  /*text-shadow: 1px 1px 1px black, -1px -1px 1px black;*/
}

.p3 {
  height: 20%;
  color: transparent;
}

@keyframes text-animation {
  from {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  }
  to {
    clip-path: polygon(0 0, 0% 1%, 0% 100%, 0% 100%);
  }
}

.cursor {
  position: absolute;
  top: 50%;
  height: 100%;
  width: 100%;
  transform: translate(0, -50%);
  animation: cursor-animation 3s ease-in-out forwards alternate infinite;
}

@keyframes cursor-animation {
  from {
    width: 100%;
  }
  to {
    width: 0;
  }
}

</style>

<!--  Breadcrumbs  -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center motivation">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Cellverse: Recruitment Drive</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="text-light">Hiring</li>
          <!--<li class="text-light">FOUNDING TEAM</li>-->
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Breadcrumbs -->
  
  
  
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="container">
             
                
                
             <!--<h1  class="text-center" style="color: red; margin-right: 30px;">[IMPORTANT DATES: APPLY BEFORE <span class="bg-light rounded p-1" style="border:1px solid light; font-size:30px; animation: glow 1s infinite; box-shadow:2px;">21 MARCH 2024</span>]</h1> <br>-->

             <h1  class="text-center" style="color: red; margin-right: 30px;">[IMPORTANT DATES: APPLY BEFORE 
             
                <span class="p p2">15 April 2024</span>
                <span class="cursor"></span>
]</h1> <br>
             <br>
             <p>At Cellverse, we develop AI-guided 3D Bioprinted tissue engineered diseases models for in vitro drug screening.  This approach promises transformation of the present practises of drug screening from animal testing to invitro disease modelling with improve accuracy, fast-track processing, more insights, and reproducibility. 
             </p>
             <br>
            <p>
             We are looking for those crazy individuals who are skilled enough to take the challenge head-on and passionate enough to make the difference.
            </p>
            <h4 style="color:#0b1539;">Join us on this rewarding journey. Details of hiring positions is mentioned below.</h4>
            
            
            <?php
            if(mysqli_num_rows($result) > 0) {
              foreach ($result as $key => $value) { ?>
            <div class="row mt-5">
                <article>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="overlay-text row">
                                <div class="col-md-8">
                                <h4 class="text-start" style="color: #000080;"><b><?= $value['title']; ?></b></h4>
                                </div>
                                <div class="col-md-4">
                                <h4 class="text-end" style="color: #000080;"><b>Job Code: <span class="bg-success text-light p-2 rounded" style="cursor: text; font-size:17px"><?= $value['jobcode']; ?></span></b></h4>
                                </div>
                                <br>
                                <div><?= $value['description']; ?></div>
                            </div>
                            
                            <div class="card-footer" style="border-top:none; background-color: var(--light-color);">
                              <a href="<?= $value['link']?>" class="btn btn-primary text-light float-end">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div><br>
            <?php   
              }
            }   
          ?>
        </div>
       <br><br>
      </div>
    </section>
    
<?php include 'footer.php'; ?>




