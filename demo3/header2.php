<?php
  
  include('admin/includes/config.php');

  $sql_setting = "SELECT * FROM settings where status != '0'";
  $setting_result=mysqli_query($con, $sql_setting);
  $settings = mysqli_fetch_assoc($setting_result);
// echo '<pre>'; print_r($settings);exit;

 ?>
<?php include 'head.php'; ?>
   <body class="site helix-ultimate hu com_content com-content view-category layout-blog task-none itemid-239 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-right">
      <div class="body-wrapper">
      <div class="body-innerwrapper">
      <header id="sp-header" >
         <div class="row">
            <div id="sp-logo" class="col-8 col-sm-6 col-md-5  col-lg-2 col-xl-3 ">
               <div class="sp-column  d-flex align-items-center">
                  <div class="logo"><a href="index">
                     <img class='logo-image '
                        srcset='admin/settings/<?= $settings["top_logo"]; ?> 1x, '
                        src='admin/settings/<?= $settings["top_logo"]; ?>'
                        alt='Cellverse' style="height: 106px;"
                        />
                     </a>
                  </div>
               </div>
            </div>
            <div id="sp-menu" class="col-4 col-sm-6 col-md-2  col-lg-7 col-xl-9 ">
               <div class="sp-column  d-flex align-items-center justify-content-end">
                  <nav class="sp-megamenu-wrapper d-flex" role="navigation">
                     <a id="offcanvas-toggler" aria-label="Menu" class="offcanvas-toggler-right d-flex d-lg-none" href="#">
                        <div class="burger-icon" aria-hidden="true"><span></span><span></span><span></span></div>
                     </a>
                     <ul class="sp-megamenu-parent menu-animation-fade-up d-none d-lg-block" style="margin-left:60px;">
                        <li class="sp-menu-item"><a href="index">Home</a></li>
												<li class="sp-menu-item"><a   href="about"  >About</a></li>
												<li class="sp-menu-item"><a   href="people"  >People</a></li>
												<li class="sp-menu-item"><a   href="product"  >Product</a></li>
												<li class="sp-menu-item"><a   href="innovation"  >Innovation</a></li>
												<li class="sp-menu-item"><a   href="commitment"  >Commitment</a></li>
												<li class="sp-menu-item" style="margin-left:60px"><a class="btn btn-md btn-primary p-3 text-light" href="hiring">Hiring</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <body class="site helix-ultimate hu com_sppagebuilder com-sppagebuilder view-page layout-default task-none itemid-218 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-right">

		
		
		<div class="body-wrapper">
			<div class="body-innerwrapper">