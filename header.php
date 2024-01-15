<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <?php
            $email = carbon_get_theme_option( 'crb_email' );
            $phone = carbon_get_theme_option( 'crb_phone' );
            $facebook = carbon_get_theme_option( 'crb_facebook_link' );  
            $instagram = carbon_get_theme_option( 'crb_instagram_link' );  
            $tiktok = carbon_get_theme_option( 'crb_tiktok_link' );  
    ?>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
          <?php if($email) { ?>
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo $email; ?>">biuro@akom-ltd.com</a></i>
          <?php } ?>
           <?php if($phone) { ?>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:<?php   _e($phone, 'AkomTranslate'); ?>"><?php   _e( $phone, 'AkomTranslate'); ?></a></i>
          <?php } ?>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">

           
                    <?php if($facebook) { ?>
                        
                        <a href="<?php echo $facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>

                    <?php } ?>

                    <?php if($instagram) { ?>

                        <a href="<?php echo $instagram;   ?>" class="instagram"><i class="bi bi-instagram"></i></a>

                    <?php } ?>

                    <?php if($tiktok) { ?>

                        <a href="<?php echo $tiktok;  ?>" class="tiktok"> <i class="bi bi-tiktok"></i></a>

                    <?php } ?>


      </div>
    </div>
  </section><!-- End Top Bar -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo get_home_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">AKOM</h1>
      </a>
      <div class="d-flex ">
      <div class="flag mobile_only">
           <?php
                wp_nav_menu( array(
                    'theme_location'    => 'Menu-flag',
                    'menu_id'        => 'Menu-flag'
                
                ) );
                ?>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
      <nav id="navbar" class="navbar">

             <?php
                wp_nav_menu( array(
                    'theme_location'    => 'Main-menu',
                    'menu_id'        => 'Main-menu'
                
                ) );
                ?>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
















