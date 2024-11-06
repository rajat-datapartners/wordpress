<?php include 'header.php'; 

$sql = "SELECT * FROM teams where type='funding_team' AND deleted != 1";
$funding_team=mysqli_query($con, $sql);


$advisor_sql = "SELECT * FROM teams where type='advisor' AND deleted != 1";
$advisor_team=mysqli_query($con, $advisor_sql);

?>

<style>
    body {
  overflow-x: hidden; /* Hide scrollbars */
}



*{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

h1{
  font-size: 2.5rem;
  font-family: 'Montserrat';
  font-weight: normal;
  color: #444;
  text-align: center;
  margin: 2rem 0;
}

.wrapper{
  width: 90%;
  margin: 0 auto;
  max-width: 80rem;
}

.cols{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.col{
  width: calc(25% - 2rem);
  margin: 2rem;
  cursor: pointer;
}

.container{
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}

.front,
.back{
  background-size: cover;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
  border-radius: 10px;
  background-position: center;
  -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
  transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
  -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
  transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
  transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  text-align: center;
  min-height: 280px;
  height: auto;
  border-radius: 10px;
  color: #fff;
  font-size: 1.5rem;
}

.back{
  background: #cedce7;
  background: -webkit-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
  background: -o-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
  background: linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
}

.front:after{
  position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    content: '';
    display: block;
    opacity: .6;
    /background-color: #000;/
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    border-radius: 10px;
}
.container:hover .front,
.container:hover .back{
    -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
}

.back{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.inner{
    -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
    top: 45%;
    position: absolute;
    left: 0;
    width: 100%;
    /*padding: 2rem;*/
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    outline: 1px solid transparent;
    -webkit-perspective: inherit;
            perspective: inherit;
    z-index: 2;
}

.container .back{
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container .front{
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container:hover .back{
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.container:hover .front{
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.front .inner p{
    padding-top: 141px;
  /font-size: 2rem;/
  /margin-bottom: 2rem;/
  position: relative;
}

.front .inner p:after{
  content: '';
  width: 4rem;
  height: 2px;
  position: absolute;
  background: #C6D4DF;
  display: block;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -.75rem;
}

.front .inner span{
  color: rgba(255,255,255,0.7);
  font-family: 'Montserrat';
  font-weight: 300;
}

@media screen and (max-width: 64rem){
  .col{
    width: calc(33.333333% - 2rem);
  }
}

@media screen and (max-width: 48rem){
  .col{
    width: calc(50% - 2rem);
  }
}

@media screen and (max-width: 32rem){
  .col{
    width: 100%;
    margin: 0 0 2rem 0;
  }
}
</style>
<!--  Breadcrumbs  -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center motivation">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>People</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="text-light">People</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Breadcrumbs -->

<div class="wrapper">
  <h1>FOUNDING TEAM</h1>
  <div class="row">
      <div class="col-md-2"></div>
      <?php 
        if(mysqli_num_rows($funding_team) > 0) {
          while($funding_team_row = mysqli_fetch_assoc($funding_team)) {
      ?>
      <div class="col-md-4" ontouchstart="this.classList.toggle('hover');">
        <div class="container" >
          <div class="front row" style="background-image: url(admin/teams/<?= $funding_team_row['userImage']?>)">
            <div class="inner ">
              <!--<p>Dr. Kanika Singroha</p>-->
              <div class="text-dark col-md-12" style="background-color: white; margin-top: 300px; padding-bottom: 20px;border-radius: 12px;font-size:20px;width:412px; margin-left:-13px;">
                  <?= $funding_team_row['name']?><br>
                  
              </div>
              <!--<span>(MDS, PhD scholar)</span>-->
            </div>
          </div>
          <div class="back">
            <div class="inner">
                <span><?= $funding_team_row['profession']; ?></span>
                <br> 
                <br> 
              <a href="<?= $funding_team_row['twitter']; ?>">
                <i class="bi bi-twitter" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $funding_team_row['insta']; ?>">
                <i class="bi bi-instagram" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $funding_team_row['fbook']; ?>">
                <i class="bi bi-facebook" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $funding_team_row['linkedin']; ?>">
                <i class="bi bi-linkedin" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php 
            }
          } 
        ?>
    </div>
 </div>
 





 <div class="wrapper" style="margin-top:100px">
  <h1>ADVISORS</h1>
  <div class="row mb-5">
      <?php 
        if(mysqli_num_rows($advisor_team) > 0) {
          while($advisor_team_row = mysqli_fetch_assoc($advisor_team)) {
      ?>
      <div class="col-md-3 col-sm-3">
        <div  ontouchstart="this.classList.toggle('hover');">
        <div class="container" style="width: 255px;">
          <div class="front row" style="background-image: url(admin/teams/<?= $advisor_team_row['userImage']?>)">
            <div class="inner ">
              <!--<p>Dr. Mohit Gambhir</p>-->
              
              <div class="text-dark col-ms-12" style="background-color: white; margin-top: 300px; padding-bottom: 20px; width:258px; border-radius: 12px;font-size:20px; margin-left:-16px;">
                 <?= $advisor_team_row['name']?><br>
                  
              </div>
            </div>
          </div>
          <div class="back">
            <div class="inner">
              
              <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $advisor_team_row['id'] ?>">
                  Read more
                </button>
                <br>
                <br>
                
              <a href="<?= $advisor_team_row['twitter']?>">
                <i class="bi bi-twitter" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $advisor_team_row['insta']?>">
                <i class="bi bi-instagram" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $advisor_team_row['fbook']?>">
                <i class="bi bi-facebook" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
              <a href="<?= $advisor_team_row['linkedin']?>">
                <i class="bi bi-linkedin" style="font-size:16px; color:white;  border-radius:50px; padding:5px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade model-lg" id="exampleModal-<?= $advisor_team_row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?= $advisor_team_row['name'] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><?= $advisor_team_row['description'] ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
       <?php 
            }
          } 
        ?>

    </div>
 </div>
 
 


 <!-- 

<div class="modal fade model-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Mohit Gambhir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            A Senior C-level executive with 22+ years of experience. At present, working as President & CEO of Verispire Corp., USA. 
        He is the former founder and director of Innovation Cell, a first-ever dedicated department created by Govt. 
        of India to foster the Innovation and IP culture in India. He worked for 15+ years at CXO levels, in various domains such as 
        Innovation Management, Patents, Patent Licensing, R & D, Entrepreneurship, Academics, Start-ups, IP Strategy, Mentoring
        for Start-ups, Social innovation, and Tech transfer, to name a few.
        Proven track record of building strong profitable teams from scratch with successful operations.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mr. Naveen Jha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            Naveen Jha brings to ALI experience developing programs uplifting marginalized communities.
            He is the past CEO of the Deshpande Foundation India, a founder of sustainable and scalable 
            enterprises having social and economic impact for the 1.1 billion residents living in rural and
            smaller cities in India. Naveen founded and led the Deshpande Education Trust, one of India’s
            biggest skill education providers for youth, Sandbox Startups, an entrepreneurship incubation 
            ecosystem, and founded Leaders Accelerating Development, a leadership development program that has
            engaged 30,000 college students in societal problem-solving activities. He is the co-founder and
            past president of the Hubli chapter of The Indus Entrepreneurs (TIE) and a founding board member of
            the Asian Venture Philanthropy Network.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Shilpi Gupta Dixit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            All India Institute of Medical Sciences, Jodhpur Anatomist and Innovator.
            Her research interest encompasses a wide range of areas including medical education,
            histology, histochemistry, biomarkers, Electron Microscopy etc with a keen interest in Genetics 
            and Innovation. Fellow of Royal Society of Biology and International Medical Sciences Academy
            & Member of National Academy of Medical Sciences, India.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mr. Devesh Rakhecha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            A Chartered Accountant turned entrepreneur who brings a wealth of knowledge 
            and experience to the table. With over 15 years of experience in finance, fundraising, 
            and valuation, he has invested in and built a portfolio of over 35 startups at Marwari 
            Catalysts, mentored and advised 200+ startups, built India’s largest yearbook publishing 
            company, and demonstrated growth of startups from Tier 2/3/4 cities of India. Devesh is also 
            a people person and has built a strong global network with venture capitalists, 
            angel funds, AIFs, and family offices.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<br>








<?php include 'footer.php'; ?>