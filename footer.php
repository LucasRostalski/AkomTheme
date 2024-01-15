


<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>AKOM</span>
            </a>
            <p>
              <?php _e('AKOM Ltd oferuje kompleksowe wykonawstwo prac z zakresu wysokociśnieniowego czyszczenia dachów, elewacji oraz kostki brukowej każdego rodzaju.','AkomTranslate');?>
             </p>
            <div class="social-links d-flex  mt-3">
             

               <?php
            $email = carbon_get_theme_option( 'crb_email' );
            $phone = carbon_get_theme_option( 'crb_phone' );
            $facebook = carbon_get_theme_option( 'crb_facebook_link' );  
            $instagram = carbon_get_theme_option( 'crb_instagram_link' );  
            $tiktok = carbon_get_theme_option( 'crb_tiktok_link' );  
       

                if($facebook) { ?>
                        
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

          <div class="col-lg-2 col-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="<?php echo get_home_url(); ?>"><?php _e('Strona główna','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php echo get_home_url(); ?>/#about"><?php _e('O nas','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta','AkomTranslate');?>"><?php _e('Oferta','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Realizacje','AkomTranslate');?>"><?php _e('Realizacje','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Kontakt','AkomTranslate');?>"><?php _e('Kontakt','AkomTranslate');?></a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4><?php _e('Oferta','AkomTranslate');?></h4>
            <ul>

              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta/','AkomTranslate');?>#myciehal"><?php _e('Mycie hal','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta/','AkomTranslate');?>#impregnacjaposesji"> <?php _e('Impregnacja posesji','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta/','AkomTranslate');?>#czyszczenieelewacji" ><?php _e('Czyszczenie elewacji','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta/','AkomTranslate');?>#czyszczeniekostki" ><?php _e('Czyszczenie kostki','AkomTranslate');?></a></li>
              <li><i class="bi bi-dash"></i> <a href="<?php _e('Oferta/','AkomTranslate');?>#myciedachow"><?php _e('Mycie dachów','AkomTranslate');?></a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontakt</h4>
            <p>
              Akom Sp. z o.o. <br>
              Gubinek 32, 66-620 Gubin <br>
              NIP: 9261676304<br><br>
              <strong><?php   _e( 'Telefon', 'AkomTranslate'); ?>:</strong> <?php   _e( $phone, 'AkomTranslate'); ?><br>
              <strong>Email: </strong><?php   echo  $email; ?> <br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; <?php echo date('Y'); ?> <strong><span>AKOM</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        
           <?php _e('Stworzone przez ','AkomTranslate');?><a href="https://web.fixars.pl/">FIXARS</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  


</body>


</html>


<?php wp_footer(); ?>

