<?php get_header(); ?>
<div class="container pb-5 pt-3"> 
    <div class="row"> 
        <div class="col-md-12"> 
        <h1><?php printf( __( 'Wyniki wyszukiwania: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1> 
        </div> 
    <div class="col-md-8"> 
        <?php if(have_posts()): ?>     
        <?php while(have_posts()): ?> 
        <?php the_post(); ?> 
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 
        <div class="blog-post"> 
        <h2 class="heading">  
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
        </h2> 
        </div> 
    <div> 
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" /> 
    </div> 
    <div> 
        <?php the_excerpt(); ?> 
    </div>             
    <div class="overlay"> 
        <a class="read-more" id="read-more" href="<?php the_permalink(); ?>">Czytaj więcej</a> 
    </div> 
    </div> 
        <?php endwhile; ?>  
        <?php endif; ?>  
    </div> 

    </div>
</div>
<?php get_footer(); ?>