<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>
		<div class="content-area pb-5">
			<main>
				<div class="container">
					<div class="row">
						<div class="col-12">
						
							<div class="text-center name_blog">
							<?php  the_archive_title( '<h1 class="article-title ">', '</h1>' ); ?>
							</div>
							<?php
							// If there are any posts
							
							if( have_posts() ):

								// Load posts loop
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'archive' );
								endwhile;

								// We're using numeric page navigation here.
								the_posts_pagination( array(
									'prev_text'		=> esc_html__( 'Previous', 'AkomTranslate' ),
									'next_text'		=> esc_html__( 'Next', 'AkomTranslate' ),
								));
								
							else:
						?>
							<p><?php esc_html_e( 'Nothing to display.', 'AkomTranslateb' ); ?></p>
						<?php endif; ?>
						</div>

					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>