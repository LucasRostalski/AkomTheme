<?php /* Template Name: Gallery */



get_header();
?>

	
	



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/realizacje.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2><?php _e('Realizacje','AkomTranslate');?></h2>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>"><?php _e('Strona główna','AkomTranslate');?></a></li>
          <li><?php _e('Realizacje','AkomTranslate');?></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

  

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">



<?php
$slides = carbon_get_the_post_meta( 'crb_slides' );

foreach ( $slides as $slide ) {

    ?>
 

     <div class="col-lg-6 col-md-6 portfolio-item filter-app">
              <a href="<?php echo $slide['image'];?>"  title="<?php echo $slide['image_text'];?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                   <img src="<?php echo $slide['image'];?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                 <h4><?php echo $slide['image_text'];?></h4>

              </div>
                </a>

            </div><!-- End Portfolio Item -->
<?php
}

?>



           

            

           

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->





<?php

get_footer();
