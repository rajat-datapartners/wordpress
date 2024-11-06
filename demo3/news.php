<?php
 	
  $sql = "SELECT * FROM news where id != '1' AND deleted != 1";
  $result=mysqli_query($con, $sql);
// echo '<pre>'; print_r($result);exit;

  $sql_first = "SELECT * FROM news where id ='1' AND deleted != 1";
  $result_first=mysqli_query($con, $sql_first);
 ?>

<style>
	.img-size-fix{
		/*height: 230px;*/
    	width: 409px;
	}

	.single-case-study{
	    height: 470px;
    	margin-top: 50px;
	}
</style>

<section id="section-id-1651886869378" class="sppb-section" >
   <div class="sppb-row-container">
      <div id="section-id-1651886869694" class="sppb-section sppb-section-content-center" >
                     <div class="sppb-container-inner">
                        <div class="sppb-row sppb-align-center">
                           <div class="sppb-col-md-6" id="column-wrap-id-1651886869288">
                              <div id="column-id-1651886869288" class="sppb-column" >
                                 <div class="sppb-column-addons">
                                    <div id="sppb-addon-wrapper-1651886869290" class="sppb-addon-wrapper">
                                       <div id="sppb-addon-1651886869290" class="clearfix "     >
                                          <div class="sppb-addon sppb-addon-text-block  ">
                                             <h1 class="sppb-addon-title text-center">Media</h1>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="sppb-col-md-6" id="column-wrap-id-1651886869291">
                              <div id="column-id-1651886869291" class="sppb-column" >
                                 <div class="sppb-column-addons"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      <div class="sppb-row">
          <?php 
             if(mysqli_num_rows($result_first) > 0) {
               while($row_first = mysqli_fetch_assoc($result_first)) {

             ?>      
         <div class="sppb-col-md-6 sppb-order-sm-2 sppb-order-xs-2" id="column-wrap-id-1651886869377">
            <div id="column-id-1651886869377" class="sppb-column" >
               <div class="sppb-column-addons">
                 
                  <div id="sppb-addon-wrapper-1651886869385" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1651886869385" class="clearfix "     >
                        <div class="sppb-addon sppb-addon-text-block  ">
                           <h1 class="sppb-addon-title"><?= $row_first['title']; ?> </h1>
                           <div class="sppb-addon-content"><?= $row_first['description']; ?></div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="content">  
                     <a href="news_detail?sr_no=<?= $row_first['id']; ?>">View <i class="fas fa-arrow-right"></i></a>
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="sppb-col-md-6 sppb-order-sm-1 sppb-order-xs-1" id="column-wrap-id-1651886869379">
            <div id="column-id-1651886869379" class="sppb-column" >
               <div class="sppb-column-addons">
                  <div id="sppb-addon-wrapper-1651886869403" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1651886869403" class="clearfix "     >
                        <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                           <div class="sppb-addon-content">
                              <div class="sppb-addon-single-image-container"><img class="sppb-img-responsive" src="./images/dot-circle.png"  alt="Image" title=""   /></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="sppb-addon-wrapper-1651886869411" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1651886869411" class="clearfix "     >
                        <div class="sppb-addon sppb-addon-raw-html ">
                           <div class="sppb-addon-content"><span class="triangle-bottom-right"></span></div>
                        </div>
                     </div>
                  </div>
                  <div id="sppb-addon-wrapper-1651886869408" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1651886869408" class="clearfix "     >
                        <div class="sppb-addon sppb-addon-single-image sppb-text-left ">
                           <div class="sppb-addon-content">
                              <div class="sppb-addon-single-image-container"><img class="sppb-img-responsive" src="admin/postimages/<?= $row_first['image']; ?>"  alt="Image" title=""   /></div>
                           </div>
                        </div>
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
</section>


<section id="section-id-1651886869689" class="sppb-section" >
   <div class="sppb-row-container">
      <div class="sppb-row">
         <div class="sppb-col-md-12" id="column-wrap-id-1651886869688">
            <div id="column-id-1651886869688" class="sppb-column" >
               <div class="sppb-column-addons">
                  
                  <div id="sppb-addon-wrapper-1651893276339" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1651893276339" class="clearfix "     >
                        <div class="sppb-addon sppb-addon-module ">
                           <div class="sppb-addon-content">
                              <div id="mod-sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-items layout-default ">
                                 <div class="sp-simpleportfolio-items sp-simpleportfolio-columns-3">
                                 	<?php
						            if(mysqli_num_rows($result) > 0) {
						              foreach ($result as $key => $value) { ?>
                                    <div class="sp-simpleportfolio-item" data-groups='["business"]'>
                                       <div class="single-case-study">
                                          <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                             <img class="simpleportfolio-img img-size-fix" src="admin/postimages/<?= $value['image']; ?>"  alt="Business Knowledge">
                                          </div>
                                          <div class="content">
                                             <h4>
                                                <?= $value['title']; ?>						
                                             </h4>
                                             <a href="news_detail?sr_no=<?= $value['id']; ?>">View <i class="fas fa-arrow-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <?php   
							              }
							            }   
							          ?>
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
   </div>
</section>