

<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo("language"); ?>">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Electronic Restaurant Menu where you can browse our meals and drinks in an easier way and choose what you prefer.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo("name"); ?></title>
  <link rel="icon" href="<?php echo get_bloginfo('template_directory') ?>/assits/img/logo.png">

    <!-- start css -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/all.css">    
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/normalize.css"> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/aos.css"> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style-rtl.css">
 
     
   
        
 <!-- end css -->
         <!-- تغيير اللاتجاه حسب اللغة -->
         <?php if(is_rtl()): ?>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style-rtl.css">
        <?php else: ?>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style.css">
          <?php endif; ?>
   <!-- تغيير اللاتجاه حسب اللغة -->

   
 
        <?php wp_head(); ?>

</head>
<body>

  <!-- Start Page Loader -->
  <div class="pageLoader"></div>

  <!-- Start Header -->
  

  <header class="header" <?php if (is_admin_bar_showing()){echo 'style="top:20px;"';} ?>
 >
    <div class="container">
      <div class="row justifyContentBetween alignItemsCenter" >
        <div class="logo">
          <a href="#"><img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/logo.png" alt="logo"></a>
        </div>
        <button type="button" class="nav-toggler" name="togglerButton">
          <span></span>
        </button>

        <nav class="nav">
          <ul>
            <li class="navItem"><a href="#home">home</a></li>
            <li class="navItem"><a href="#about">about</a></li>
            <li class="navItem"><a href="#ourMenu">our menu</a></li>
            <li class="navItem"><a href="#testim">testimonials</a></li>
            <li class="navItem"><a href="#team">team</a></li>
            <li class="navItem"><a href="#contact">contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>