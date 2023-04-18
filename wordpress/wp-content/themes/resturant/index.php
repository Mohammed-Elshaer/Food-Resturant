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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style-rtl.css">    
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style.css"> 
   
        
    <!-- end css -->
         <!-- تغيير اللاتجاه حسب اللغة -->
         <?php if(is_rtl()): ?>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style-rtl.css">
        <?php else: ?>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assits/css/style.css">
            <?php endif; ?>
   <!-- تغيير اللاتجاه حسب اللغة -->


</head>
<body>

  <!-- Start Page Loader -->
  <div class="pageLoader"></div>

  <!-- Start Header -->
  <header class="header">
    <div class="container">
      <div class="row justifyContentBetween alignItemsCenter">
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

  <!-- Start Home Section -->
  <section class="homeSection" id="home">
    <div class="homeBg"></div>
    <div class="container">
      <div class="row min-vh-100 alignItemsCenter">
        <div class="homeText" data-aos="fade-up" data-aos-duration="1000">
          <!-- <h1>Dine Out Restaurant</h1> -->
          <h1 id="intro" style="">
          <!-- <a href="<?php echo site_url(); ?>"> -->
                 <?php bloginfo("description"); ?>
          </h1>

          <p>Join us for your next meal. We get the juices flowing <br> Always expect
            GREAT TASTE, GOOD TIMES</p>
          <a href="#ourMenu" class="btn btnDefault">our menu</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Start About Section -->
  <section class="aboutSection secPadding" id="about">
    <div class="container">
      <div class="row">
        <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
          <h2 data-title="our story">about us</h2>
        </div>
      </div>
      <div class="row">
        <div class="aboutText" data-aos="fade-right" data-aos-duration="1000">
          <h3>Welcome To Dine Out Restaurant</h3>
          <p>Here at Dine Out’s Burgers and Meals we take pride in the quality of the meat used for each and every burger. If it’s not perfect and grilled just the way you ordered it, we won’t send it out.  We guarantee the burger delivered to your table is the best burger you could have ordered.</p>
          <p>No good meal is complete without that refreshing taste of local juice. We have over 20 types of juices, and a partition for desserts lovers.</p>
          <a href="#ourMenu" class="btn btnDefault">check our menu</a>
        </div>
        <div class="aboutImage" data-aos="fade-left" data-aos-duration="1000">
          <div class="imageBox">
            <h3>20+ years experience</h3>
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/about-img.jpg" alt="About Image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Menu Section -->
  <section class="menuSection secPadding" id="ourMenu">
    <div class="container">
      <div class="row">
        <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
          <h2 data-title="order now">our menu</h2>
        </div>
      </div>
      <div class="row">
        <div class="menuTabs" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          <button type="button" class="menuTabItem active" data-target="#lunch">lunch</button>
          <button type="button" class="menuTabItem" data-target="#dinner">dinner</button>
          <button type="button" class="menuTabItem" data-target="#drinks">drinks</button>
          <button type="button" class="menuTabItem" data-target="#desserts">desserts</button>
        </div>
      </div>
      <div class="row menuTabContent active" id="lunch">
          <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/2.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/3.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/4.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/5.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/6.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/7.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
          <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
            <div class="menuItemTitle">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/8.jpg" alt="menu item thumbnail">
              <h3>lunch item</h3>
            </div>
            <div class="menuItemPrice">
              $40.00
            </div>
          </div>
      </div>
      <div class="row menuTabContent" id="dinner">
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
            <h3>dinner item</h3>
          </div>
          <div class="menuItemPrice">
            $30.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/2.jpg" alt="menu item thumbnail">
            <h3>dinner item</h3>
          </div>
          <div class="menuItemPrice">
            $30.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/3.jpg" alt="menu item thumbnail">
            <h3>dinner item</h3>
          </div>
          <div class="menuItemPrice">
            $30.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/4.jpg" alt="menu item thumbnail">
            <h3>dinner item</h3>
          </div>
          <div class="menuItemPrice">
            $30.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/5.jpg" alt="menu item thumbnail">
            <h3>dinner item</h3>
          </div>
          <div class="menuItemPrice">
            $30.00
          </div>
        </div>
      </div>
      <div class="row menuTabContent" id="drinks">
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
            <h3>drink item</h3>
          </div>
          <div class="menuItemPrice">
            $10.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/2.jpg" alt="menu item thumbnail">
            <h3>drink item</h3>
          </div>
          <div class="menuItemPrice">
            $10.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/3.jpg" alt="menu item thumbnail">
            <h3>drink item</h3>
          </div>
          <div class="menuItemPrice">
            $10.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/4.jpg" alt="menu item thumbnail">
            <h3>drink item</h3>
          </div>
          <div class="menuItemPrice">
            $10.00
          </div>
        </div>
      </div>
      <div class="row menuTabContent" id="desserts">
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
            <h3>dessert item</h3>
          </div>
          <div class="menuItemPrice">
            $20.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
            <h3>dessert item</h3>
          </div>
          <div class="menuItemPrice">
            $20.00
          </div>
        </div>
        <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="menuItemTitle">
            <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/menu/1.jpg" alt="menu item thumbnail">
            <h3>dessert item</h3>
          </div>
          <div class="menuItemPrice">
            $20.00
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Testimonials Section -->
  <section class="testimSection secPadding" id="testim">
    <div class="container">
      <div class="row">
        <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
          <h2 data-title="testimonials">some feedbacks</h2>
        </div>
      </div>
      <div class="row testimItemContainer">
        <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
          <div class="testimAuthor">
            <div class="testimAuthorName">
              <h3>Shrouk Emam</h3>
              <span>Social Media Specialist</span>
            </div>
            <div class="testimAuthorImage">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/testimonials/2.jpg" alt="Client">
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
          <div class="testimAuthor">
            <div class="testimAuthorName">
              <h3>Ahmed Hafez</h3>
              <span>Front-End Web Developer</span>
            </div>
            <div class="testimAuthorImage">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/testimonials/3.jpg" alt="Client">
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star transparentStar"></i>
          </div>
        </div>
        <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
          <div class="testimAuthor">
            <div class="testimAuthorName">
              <h3>Omnia Tharwet</h3>
              <span>HR Director</span>
            </div>
            <div class="testimAuthorImage">
              <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/testimonials/1.jpg" alt="Client">
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Team Section -->
  <section class="teamSection secPadding" id="team">
    <div class="container">
      <div class="row">
        <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
          <h2 data-title="team">our chefs</h2>
        </div>
      </div>
      <div class="row teamItemContainer">
        <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
          <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/team/1.jpg" alt="team item">
          <div class="teamItemInfo">
            <h3>Eman Younes</h3>
            <p>head chef</p>
          </div>
        </div>
        <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
          <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/team/2.jpg" alt="team item">
          <div class="teamItemInfo">
            <h3>Mohamed Ali</h3>
            <p>head chef</p>
          </div>
        </div>
        <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
          <img src="<?php echo get_bloginfo('template_directory') ?>/assits/img/team/3.jpg" alt="team item">
          <div class="teamItemInfo">
            <h3>Asmaa Emam</h3>
            <p>head chef</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Footer -->
  <footer class="footer" id="contact">
    <div class="container">
      <div class="row footerItemContainer">
        <div class="footerItem" data-aos="fade-up" data-aos-duration="1000">
          <h3>our location</h3>
          <p>xyz Street, Sector-12, <br> New Delhi - 000***</p>
        </div>
        <div class="footerItem" data-aos="fade-up" data-aos-duration="1000">
          <h3>opening hours</h3>
          <p>Monday to Sunday <br> 9:00 AM - 10:00 PM</p>
        </div>
        <div class="footerItem" data-aos="fade-up" data-aos-duration="1000">
          <h3>contact us</h3>
          <p>91 9654 293 *** <br> info@gmail.com</p>
          <div class="socialLinks">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-down" data-aos-duration="1000">
        <div class="copyright">
          &copy; 2021 - Designed by Ahmed Hafez
        </div>
      </div>
    </div>
  </footer>

  <!-- Start TO TOP BUTTON -->
  <div id='toTop'>
    <i class="fas fa-angle-double-up fa-lg totop-icon" title="Go To Top"></i>
  </div>
  <!-- -------------------------------- End Of The Project -------------------------------- -->
  


  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assits/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assits/js/all.js"></script>   
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assits/js/aos.js"></script>   
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assits/js/script.js"></script>   

</body>
</html>