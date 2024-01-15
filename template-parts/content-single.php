<?php


?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <div class="text-center single-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="post-thumbnail-medium">
            <?php 
            if( has_post_thumbnail() ): 
                the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
    </header>    
    <div class="content">
    	<?php 
    	wp_link_pages(
    		array(
    			'before'	=> '<p class="inner-pagination">' . esc_html__( 'Pages', 'AkomTranslate' ),
    			'after'		=> '</p>',
    		)
    	);
    	?>
        <?php the_content(); ?>
    </div>
</article>