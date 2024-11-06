<?php
  
  include('admin/includes/config.php');

  $sql_setting = "SELECT * FROM settings where status != '0'";
  $setting_result=mysqli_query($con, $sql_setting);
  $settings = mysqli_fetch_assoc($setting_result);
// echo '<pre>'; print_r($settings);exit;

 ?>
<!doctype html>
<html lang="en-gb" dir="ltr">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
	<meta name="generator" content="Helix Ultimate - The Most Popular Joomla! Template Framework.">
	<title>Welcome to Cellverse Pvt Ltd</title>
	<link href="https://cellverse.org/" rel="alternate" hreflang="ta-IN">
	<link href="https://cellverse.org/" rel="alternate" hreflang="es-ES">
	<link href="https://cellverse.org/" rel="alternate" hreflang="de-DE">
	<link href="index.html" rel="alternate" hreflang="en-GB">
	<link href="admin/settings/<?= $settings["favicon_image"]; ?>" rel="icon" type="image/vnd.microsoft.icon">
<link href="./media/vendor/joomla-custom-elements/css/joomla-alert.min44b7.css?0.2.0" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/font-awesome-5.min.css" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/font-awesome-v4-shims.css" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" />
	<link href="./components/com_sppagebuilder/assets/css/js_slider.css" rel="stylesheet" />
	<link href="./components/com_spsimpleportfolio/assets/css/featherlight.min.css" rel="stylesheet" />
	<link href="./components/com_spsimpleportfolio/assets/css/spsimpleportfolio.css" rel="stylesheet" />
	<link href="./templates/techex/css/bootstrap.min.css" rel="stylesheet" />
	<link href="./plugins/system/helixultimate/assets/css/system-j4.min.css" rel="stylesheet" />
	<link href="./templates/techex/css/template.css" rel="stylesheet" />
	<link href="./templates/techex/css/presets/preset9.css" rel="stylesheet" />
	<link href="./templates/techex/css/custom.css" rel="stylesheet" />
	<link href="new_style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

	<style>#sp-header {
background: transparent;
position: absolute;
padding: 0;
}

#sp-header.header-sticky {
background: #fff;
}

.sp-megamenu-parent > li > a, .sp-megamenu-parent > li > span, .sp-megamenu-parent > li:last-child > a, .sp-megamenu-parent .sp-dropdown li.sp-menu-item > a, .sp-megamenu-parent .sp-dropdown li.sp-menu-item span:not(.sp-menu-badge),
.sp-megamenu-parent > li.active > a {
	color: #211e3b;
}

.sp-megamenu-parent > li.active > a:hover, .sp-megamenu-parent > li:hover > a {
	color: #febc35;
}

.sp-megamenu-parent .sp-dropdown .sp-dropdown-inner {
	background-color: #febc35;
}

.burger-icon > span {
	background-color: var(--maincolor);
}</style>
	<style>.logo-image {height:30px;}.logo-image-phone {height:30px;}</style>
<script src="./media/vendor/jquery/js/jquery.min8a0c.js?3.7.1"></script>
	<script src="./media/legacy/js/jquery-noconflict.min02ca.js?647005fc12b79b3ca2bb30c059899d5994e3e34d"></script>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"cf4682c333e4199f226c94f1964b89f6","data":{"breakpoints":{"tablet":991,"mobile":480},"header":{"stickyOffset":"100"}},"joomla.jtext":{"ERROR":"Error","MESSAGE":"Message","NOTICE":"Notice","WARNING":"Warning","JCLOSE":"Close","JOK":"OK","JOPEN":"Open"},"system.paths":{"root":"","rootFull":"https:\/\/techex.windstripedesign.ro\/","base":"","baseFull":"https:\/\/techex.windstripedesign.ro\/"}}</script>
	<script src="./media/system/js/core.mind6dc.js?ee06c8994b37d13d4ad21c573bbffeeb9465c0e2"></script>
	<script src="./media/vendor/bootstrap/js/bootstrap-es5.mine55b.js?5.3.2" nomodule defer></script>
	<script src="./media/system/js/showon-es5.min5c41.js?0e293ba9dec283752e25f4e1d5eb0a6f8c07d3be" defer nomodule></script>
	<script src="./media/system/js/messages-es5.min268e.js?c29829fd2432533d05b15b771f86c6637708bd9d" nomodule defer></script>
	<script src="./media/vendor/bootstrap/js/alert.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/button.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/carousel.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/collapse.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/dropdown.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/modal.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/offcanvas.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/popover.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/scrollspy.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/tab.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/vendor/bootstrap/js/toast.mine55b.js?5.3.2" type="module"></script>
	<script src="./media/system/js/showon.minb3a7.js?f79c256660e2c0ca2179cf7f3168ea8143e1af82" type="module"></script>
	<script src="./media/system/js/messages.minc0ea.js?7f7aa28ac8e8d42145850e8b45b3bc82ff9a6411" type="module"></script>
	<script src="./components/com_sppagebuilder/assets/js/jquery.parallaxc706.js?efcb014a6f41a6d880968ea58653b58d"></script>
	<script src="./components/com_sppagebuilder/assets/js/sppagebuilderc706.js?efcb014a6f41a6d880968ea58653b58d" defer></script>
	<script src="./components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="./components/com_sppagebuilder/assets/js/js_slider.js"></script>
	<script src="./components/com_spsimpleportfolio/assets/js/jquery.shuffle.modernizr.min.js"></script>
	<script src="./components/com_spsimpleportfolio/assets/js/featherlight.min.js"></script>
	<script src="./components/com_spsimpleportfolio/assets/js/spsimpleportfolio.js"></script>
	<script src="./components/com_sppagebuilder/assets/js/sp_carousel.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="./templates/techex/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<script>;(function ($) {
	$.ajaxSetup({
		headers: {
			'X-CSRF-Token': Joomla.getOptions('csrf.token')
		}
	});
})(jQuery);</script>
	<script>template="techex";</script>
	<meta property="og:title" content="Home" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://cellverse.org/" />
	<meta property="og:site_name" content="Techex" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="Techex" />
	<link href="index.html" rel="alternate" hreflang="x-default">
	</head>
	<body class="site helix-ultimate hu com_sppagebuilder com-sppagebuilder view-page layout-default task-none itemid-218 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-right">

		
		
		<div class="body-wrapper">
			<div class="body-innerwrapper">
								
<header id="sp-header" >

						<div class="container">
				<div class="container-inner">
			
	
		<div class="row">
			<div id="sp-logo" class="col-8 col-sm-6 col-md-5  col-lg-2 col-xl-3 "><div class="sp-column  d-flex align-items-center"><div class="logo"><a href="index">
						<img class='logo-image '
							srcset='admin/settings/<?= $settings["top_logo"]; ?> 1x, '
							src='admin/settings/<?= $settings["top_logo"]; ?>'
							alt='Techex'
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
						<ul class="sp-megamenu-parent menu-animation-fade-up d-none d-lg-block" style="margin-left: 60px;">
							<li class="sp-menu-item"><a   href="index" >Home</a></li>
							<li class="sp-menu-item"><a   href="about"  >About</a></li>
							<li class="sp-menu-item"><a   href="people"  >People</a></li>
							<li class="sp-menu-item"><a   href="product"  >Product</a></li>
							<li class="sp-menu-item"><a   href="innovation"  >Innovation</a></li>
							<li class="sp-menu-item"><a   href="commitment"  >Commitment</a></li>
							<li class="sp-menu-item" style="margin-left:60px"><a class="btn btn-md btn-primary p-3 text-light" href="hiring"  >Hiring</a></li>
						</ul>
					</nav>
				</div>
			</div>
			</div>
							</div>
			</div>
			
</header>