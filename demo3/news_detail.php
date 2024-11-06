<?php
include 'header2.php';
  
  $id = $_GET['sr_no'];

 
  $sql = "SELECT * FROM news where id='$id'";
  $result = mysqli_query($con, $sql);
// echo '<pre>'; print_r($result);exit;
 ?>
<section id="sp-section-3" >
   <div class="row">
      <div id="sp-title" class="col-lg-12 ">
         <div class="sp-column ">
            <div class="sp-page-title"style="background-color: #211e3b;background-image: url(images/page-banner.jpg#joomlaImage://local-images/page-banner.jpg?width=1650&height=415);">
               <div class="container">
                  <h2 class="sp-page-title-heading">Media</h2>
                  
                  <ol class="breadcrumb">
                     
                     <li  class="breadcrumb-item">
                        <a href="index" >Home</a>
                     </li>
                     <li class="breadcrumb-item active">
                        <span itemprop="name">Media</span>				
                        <meta itemprop="position" content="2">
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="sp-main-body" >
   <div class="container">
      <div class="container-inner">
         <div class="row">
            <main id="sp-component" class="col-lg-12 ">
               <div class="sp-column ">

               	<?php 
              if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

              ?>

                  <div id="system-message-container" aria-live="polite">
                  </div>
                  <br>
                  <div id="sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-item">
                     <div id="sp-page-builder" class="sp-page-builder sppb-item-page-wrapper">
                        <div class="page-content">
                           <section id="section-id-1652324604514" class="sppb-section" >
                              <div class="sppb-row-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-md-6" id="column-wrap-id-1652324604512">
                                       <div id="column-id-1652324604512" class="sppb-column" >
                                          <div class="sppb-column-addons">
                                             <div id="sppb-addon-wrapper-1652324676954" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1652324676954" class="clearfix "     >
                                                   <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                                      <div class="sppb-addon-content">
                                                         <div class="sppb-addon-single-image-container">
                                                             <img class="sppb-img-responsive" src="admin/postimages/<?= $row['image'] ?>"  alt="Image" title="" style="border-radius: 15px;" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <br>
                           <section id="section-id-1652324604562" class="sppb-section" >
                              <div class="sppb-row-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-md-8" id="column-wrap-id-1652324604560">
                                       <div id="column-id-1652324604560" class="sppb-column" >
                                          <div class="sppb-column-addons">
                                             <div id="sppb-addon-wrapper-1652324811069" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1652324811069" class="clearfix "     >
                                                   <div class="sppb-addon sppb-addon-text-block  ">
                                                      <h2 class="sppb-addon-title"><?= $row['title'] ?></h2>
                                                      <div class="sppb-addon-content"><?= $row['description'] ?><br /><br /></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="sppb-addon-wrapper-1652324604588" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1652324604588" class="clearfix "     ></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>

                  <?php 
                }
              } 
              ?>
               </div>
            </main>
         </div>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>