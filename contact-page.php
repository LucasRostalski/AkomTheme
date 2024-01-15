<?php /* Template Name: Contact */ 



get_header();
?>

	
	 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/contact-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2><?php   _e( 'Kontakt', 'AkomTranslate'); ?></h2>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>"><?php   _e( 'Strona główna', 'AkomTranslate'); ?></a></li>
          <li><?php   _e( 'Kontakt', 'AkomTranslate'); ?></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4> <?php   _e( 'Adres', 'AkomTranslate'); ?></h4>
                <p>Akom Sp. z o.o., Gubinek 32, 66-620 Gubin, NIP: 9261676304</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>biuro@akom-ltd.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4><?php   _e( 'Telefon', 'AkomTranslate'); ?></h4>
                <p><?php   _e( '+48 721 406 219', 'AkomTranslate'); ?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <div class="php-email-form">
             <?php the_content(); ?>
            </div>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



<?php

get_footer();
