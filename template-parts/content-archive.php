<?php
/**
 * Template part for displaying posts
 *
 */

?>
<article <?php post_class(); ?>>
	
	<div class="post-thumbnail-small">
		<?php 
		if( has_post_thumbnail() ):
			the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid' ) );
		endif;
		?>
	</div>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="meta">
		<p><?php esc_html_e( 'Opublikowany przez', 'AkomTranslate' ); ?> <?php the_author_posts_link(); ?> 
		<?php esc_html_e( 'on', 'GoldShop' ); ?> <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
		<br />
		<?php if( has_category() ): ?>
			<?php esc_html_e( 'Kategorie', 'AkomTranslate' ); ?>: <span><?php the_category( ' ' ); ?></span>
		<?php endif; ?>
		<br />
		<?php if( has_tag() ): ?>
			<?php esc_html_e( 'Tagi', 'AkomTranslate' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
		<?php endif; ?>
		</p>
	</div>
	<?php if( has_excerpt() ): ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
	   <div class="content"><?php the_content( 'More' ); ?></div>
    <?php else: ?>
         <div class="content"><?php the_excerpt(); ?></div>
    <?php endif; ?>
</article>