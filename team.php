<?php include 'header.php'; ?>

<style>
    /* for demo purposes */
/*body {*/
/*  background: grey;*/
/*}*/

.card-block .btn-outline-primary {
  width: 100%;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  bottom: 0;
  left: 0;
  position: absolute;
}

.card {
  margin: 20px 0;
}

/* Flip Cards CSS */
.card-container {
  perspective: 700px;
}
.card-flip {
  position: relative;
  width: 100%;
  transform-style: preserve-3d;
  height: auto;
  transition: all 0.5s ease-out;
  background: white;
  border: none;
  height:460px;
  /*box-shadow: 2px 3px;*/
}

.card-flip div {
  backface-visibility: hidden;
  transform-style: preserve-3d;
  height: 100%;
  width: 100%;
  border: none;
}

.card-flip .front {
  position: relative;
  z-index: 1;
}

.card-flip .back {
  position: relative;
  z-index: 0;
  transform: rotateY(-180deg);
}

.card-container:hover .card-flip {
  transform: rotateY(180deg);
}

</style>
  <!--  Breadcrumbs  -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center team">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="text-light">Our Team</li>
        </ol>
      </div>
    </nav>
  </div>
  
  <!-- End Breadcrumbs -->

  <!--<main id="main">-->

  <!--  <div class="single-page">-->
      <!--  Our Team Section  -->
    <!--<section id="team" class="team sections-bg">-->
        
    <!--  <div class="container aos-init aos-animate" data-aos="fade-up">-->
          
    <!--    <div class="row gy-4">-->
    <!--        <h4 class="text-center">FOUNDING TEAM</h4>-->
    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">-->
            
    <!--      </div>-->
          
    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Dr_Kanika_singroha.jpg" class="img-fluid" alt="">-->
    <!--          <h4>Dr. Kanika Singroha </h4>-->
    <!--          <span>(MDS, PhD scholar)</span>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Dr_Indranil_banerjee.jpg" class="img-fluid" alt="">-->
    <!--          <h4>Dr. Indranil Banerjee </h4>-->
    <!--          <span>(PhD)</span>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    
    
    
    
    
    <!--<section id="team" class="team sections-bg">-->
    <!--  <div class="container aos-init aos-animate" data-aos="fade-up">-->
    <!--    <div class="row gy-4">-->
    <!--         <h4 class="text-center">ADVISORS:</h4>-->
    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Dr_Mohit_Gambhir.jpg" class="img-fluid" alt="">-->
    <!--          <h4>Dr. Mohit Gambhir </h4>-->
    <!--          <span>(PhD)</span>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Mr_Naveen_Jha.jpg" class="img-fluid" alt="">-->
    <!--          <h4>Mr. Naveen Jha </h4>-->
    <!--          <span>(Harvard Advanced Leadership Initiative)</span>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Dr_shilpi_Gupta_Dixit.jpg" class="img-fluid" alt="">-->
    <!--          <h4>Dr. Shilpi Gupta Dixit </h4>-->
    <!--          <span>Vice Dean (Academics) & Professor (Anatomy)</span>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">-->
    <!--        <div class="member">-->
    <!--          <img src="assets/images/team/Mr_Devesh_Rakhecha.jpg" class="img-fluid" alt="" style="height: 295px; width: 207px;">-->
    <!--          <h4>Mr. Devesh Rakhecha</h4>-->
    <!--          <div class="social">-->
    <!--            <a href="#"><i class="bi bi-twitter"></i></a>-->
    <!--            <a href="#"><i class="bi bi-facebook"></i></a>-->
    <!--            <a href="#"><i class="bi bi-linkedin"></i></a>-->
    <!--            <a href="#"><i class="bi bi-instagram"></i></a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    
    
  <!--  </div>-->

  <!--</main>-->
  
  
  
  
<main id="main">
    <div class="single-page">
        <div class="container">
           <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                  <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                  <img src="assets/images/team/Dr_Kanika_singroha.jpg" class="img-fluid pt-3" alt="">
                      <h5>Dr. Kanika Singroha </h5>
                      <span>(MDS, PhD scholar)</span>
                </div>
                <div class="back card-block">
                    <p>testing some text</p>
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                      <img src="assets/images/team/Dr_Indranil_banerjee.jpg" class="img-fluid pt-3" alt="">
                      <h5>Dr. Indranil Banerjee </h5>
                      <span>(PhD)</span>
                </div>
                <div class="back card-block">
                    <p>testing some text</p>
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
          </div>
  
  
          <div class="row text-center">
            <div class="col-md-3 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                  <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                  <img src="assets/images/team/Dr_Mohit_Gambhir.jpg" class="img-fluid pt-3" alt="">
                      <h5>Dr. Mohit Gambhir</h5>
                      <span>(PhD)</span>
                </div>
                <div class="back card-block">
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                      <img src="assets/images/team/Mr_Naveen_Jha.jpg" class="img-fluid pt-3" alt="">
                      <h5>Mr. Naveen Jha </h5>
                      <span>(Harvard Advanced Leadership Initiative)</span>
                </div>
                <div class="back card-block">
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-3 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                      <img src="assets/images/team/Dr_shilpi_Gupta_Dixit.jpg" class="img-fluid pt-3" alt="">
                      <h5>Dr. Shilpi Gupta Dixit</h5>
                      <span>Vice Dean (Academics) & Professor (Anatomy)</span>
                </div>
                <div class="back card-block">
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-3 card-container">
              <div class="card card-flip">
                <div class="front card-block">
                      <img src="assets/images/team/Mr_Devesh_Rakhecha.jpg" class="img-fluid pt-3" alt="" style="height:298px;">
                      <h5>Mr. Devesh Rakhecha</h5>
                </div>
                <div class="back card-block">
                  <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </div>
 </main>
  
  
<?php include 'footer.php'; ?>