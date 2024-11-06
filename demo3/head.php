<?php
  
  include('admin/includes/config.php');

  $sql_setting = "SELECT * FROM settings where status != '0'";
  $setting_result=mysqli_query($con, $sql_setting);
  $settings = mysqli_fetch_assoc($setting_result);
// echo '<pre>'; print_r($settings);exit;

 ?>
 <!doctype html>
<html lang="en-gb" dir="ltr">
   <!-- Mirrored from techex.windstripedesign.ro/en/news-list-5 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 07:41:44 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta charset="utf-8">
      <meta name="generator" content="Helix Ultimate - The Most Popular Joomla! Template Framework.">
      <title>Welcome to Cellverse Pvt Ltd</title>
      
      <link href="news-list-5c0d0?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="Default Blog">
      <link href="news-list-57b17?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Default Blog">
      <link href="admin/settings/<?= $settings["favicon_image"]; ?>" rel="icon" type="image/vnd.microsoft.icon">
      <link href="./media/vendor/chosen/css/chosene139.css?1.8.7" rel="stylesheet" />
      <link href="./media/vendor/joomla-custom-elements/css/joomla-alert.min44b7.css?0.2.0" rel="stylesheet" />
      <link href="./templates/techex/css/bootstrap.min.css" rel="stylesheet" />
      <link href="./plugins/system/helixultimate/assets/css/system-j4.min.css" rel="stylesheet" />
      <link href="./templates/techex/css/template.css" rel="stylesheet" />
      <link href="./templates/techex/css/presets/preset9.css" rel="stylesheet" />
      <link href="./templates/techex/css/custom.css" rel="stylesheet" />
      <link href="./components/com_sppagebuilder/assets/css/font-awesome-5.min.css" rel="stylesheet" />
      <link href="./components/com_sppagebuilder/assets/css/font-awesome-v4-shims.css" rel="stylesheet" />
      <link href="./components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" />
      <link href="./components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" />
      <link href="./components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" />
      <link href="./media/mod_languages/css/template.min904f.css?0c46ddbcc4ec89d91289a46708edae3b" rel="stylesheet" />
      <link href="new_style.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>.logo-image {height:30px;}.logo-image-phone {height:30px;}</style>
      <script src="./media/vendor/jquery/js/jquery.min8a0c.js?3.7.1"></script>
      <script src="./media/legacy/js/jquery-noconflict.min02ca.js?647005fc12b79b3ca2bb30c059899d5994e3e34d"></script>
      <script type="application/json" class="joomla-script-options new">{"data":{"breakpoints":{"tablet":991,"mobile":480},"header":{"stickyOffset":"100"}},"joomla.jtext":{"MOD_FINDER_SEARCH_VALUE":"Search &hellip;","ERROR":"Error","MESSAGE":"Message","NOTICE":"Notice","WARNING":"Warning","JCLOSE":"Close","JOK":"OK","JOPEN":"Open"},"system.paths":{"root":"","rootFull":"https:\/\/techex.windstripedesign.ro\/","base":"","baseFull":"https:\/\/techex.windstripedesign.ro\/"},"csrf.token":"483fe6714da1df989db7e8dcd68040f3"}</script>
      <script src="./media/system/js/core.mind6dc.js?ee06c8994b37d13d4ad21c573bbffeeb9465c0e2"></script>
      <script src="./media/vendor/bootstrap/js/bootstrap-es5.mine55b.js?5.3.2" nomodule defer></script>
      <script src="./media/system/js/showon-es5.min5c41.js?0e293ba9dec283752e25f4e1d5eb0a6f8c07d3be" defer nomodule></script>
      <script src="./media/com_finder/js/finder-es5.min7161.js?e6d3d1f535e33b5641e406eb08d15093e7038cc2" nomodule defer></script>
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
      <script src="./media/com_finder/js/finder.min2cac.js?a2c3894d062787a266d59d457ffba5481b639f64" type="module"></script>
      <script src="./media/vendor/chosen/js/chosen.jquery.mine139.js?1.8.7"></script>
      <script src="./media/legacy/js/joomla-chosen.min904f.js?0c46ddbcc4ec89d91289a46708edae3b"></script>
      <script src="./media/system/js/messages.minc0ea.js?7f7aa28ac8e8d42145850e8b45b3bc82ff9a6411" type="module"></script>
      <script src="./templates/techex/js/main.js"></script>
      <script src="./components/com_sppagebuilder/assets/js/jquery.parallaxc706.js?efcb014a6f41a6d880968ea58653b58d"></script>
      <script src="./components/com_sppagebuilder/assets/js/sppagebuilderc706.js?efcb014a6f41a6d880968ea58653b58d" defer></script>
      <script src="./components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js"></script>
      <script>
         jQuery(document).ready(function (){
         	jQuery('.advancedSelect').jchosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
         });
      </script>
      <script>template="techex";</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   </head>