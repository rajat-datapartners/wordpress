<?php 

include 'header2.php';

$sql = "SELECT * FROM aboutus where status = 1";
$aboutus=mysqli_query($con, $sql);


if(mysqli_num_rows($aboutus) > 0) {
  while($row = mysqli_fetch_assoc($aboutus)) {
      
 ?>
<section id="sp-section-3" >
   <div class="row">
      <div id="sp-title" class="col-lg-12 ">
         <div class="sp-column ">
            <div class="sp-page-title"style="background-color: #211e3b;background-image: url(./images/page-banner.jpg#joomlaImage://local-images/page-banner.jpg?width=1650&height=415);">
               <div class="container">
                  <h2 class="sp-page-title-heading"><?= htmlentities($row['title'])?></h2>
                  <h3 class="sp-page-title-sub-heading">about</h3>
                  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                     <li class="float-start">
                        <span class="divider fas fa-map-marker-alt" aria-hidden="true"></span>
                     </li>
                     <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item">
                        <a itemprop="item" href="index" class="pathway"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                     </li>
                     <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">
                        <span itemprop="name"> / About </span>				
                        <meta itemprop="position" content="2">
                     </li>
                     <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">
                        <!--<span itemprop="name"><?= htmlentities($row['title'])?></span>				-->
                        <meta itemprop="position" content="2">
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="sp-main-body" class="mt-3" >
   <div class="row">
      <main id="sp-component" class="col-lg-12 ">
         <div class="sp-column ">
            <div id="system-message-container" aria-live="polite">
            </div>
            <div id="sp-page-builder" class="sp-page-builder  page-17">
               <div class="page-content">
                  <section id="section-id-1652318961782" class="sppb-section" >
                     <div class="sppb-row-container">
                        <div class="sppb-row">
                           <div class="sppb-col-md-12 sppb-order-sm-2 sppb-order-xs-2" id="column-wrap-id-1652318961782">
                              <div id="column-id-1652318961782" class="sppb-column" >
                                 <div class="sppb-column-addons">
                                     <?= $row['description']?>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </section>
                  
                                   
               </div>
            </div>
         </div>
      </main>
   </div>
</section>

<?php }
}?>
<?php include('footer.php'); ?>