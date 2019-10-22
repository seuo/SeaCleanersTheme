
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sea Cleaners</title>


<link href="images/favicon.png" rel="icon">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--PreLoader-->
<div class="loader">
   <div class="loader-inner">
      <div class="loader-blocks">
         <span class="block-1"></span>
         <span class="block-2"></span>
         <span class="block-3"></span>
         <span class="block-4"></span>
         <span class="block-5"></span>
         <span class="block-6"></span>
         <span class="block-7"></span>
         <span class="block-8"></span>
         <span class="block-9"></span>
         <span class="block-10"></span>
         <span class="block-11"></span>
         <span class="block-12"></span>
         <span class="block-13"></span>
         <span class="block-14"></span>
         <span class="block-15"></span>
         <span class="block-16"></span>
      </div>
   </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<header class="site-header">
   <nav class="navbar navbar-expand-lg center-brand static-nav">
      <div class="container">
         <a class="navbar-brand" href="index.html">
         <img src="images/logo-transparent.png" alt="logo" class="logo-default">
         <img src="images/logo-dark.png" alt="logo" class="logo-scrolled">
         </a>
         <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
            <span> </span>
            <span> </span>
            <span> </span>
         </button>
         <div class="collapse navbar-collapse" id="xenav">
         <?php wp_nav_menu( array(
               'theme_location' => 'main-menu',
               'container' => 'ul',
               'menu_class' => 'navbar-nav'
            )); ?>
      </div>

      <!--side menu open button-->
      <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
          <span></span> <span></span> <span></span>
       </a>
   </nav>

   <!-- side menu -->
   <div class="side-menu">
      <div class="inner-wrapper">
         <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
         <nav class="side-nav w-100">

         <?php wp_nav_menu( array(
               'theme_location' => 'main-menu',
               'container' => 'ul',
               'menu_class' => 'navbar-nav'
            )); ?>

         </nav>


         <div class="side-footer w-100">
            <ul class="social-icons-simple white top40">
               <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
            </ul>
            <p class="whitecolor">&copy; 2018 XeOne. Made With Love by themesindustry</p>
         </div>
      </div>
   </div>
   <a id="close_side_menu" href="javascript:void(0);"></a>
   <!-- End side menu -->
   <?php wp_head()?>
</header>
<!-- header -->