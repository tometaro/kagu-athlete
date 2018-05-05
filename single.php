<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ah
 */

get_header(); ?>
	<div class="keyVisual">
		<div class="keyVisual-wrap">
			<div class="keyVisual-overlay">
				<div class="keyVisual-gradation">
					<div class="keyVisual-titleBlock-left">
						<h1 class="keyVisual-title"><?php the_title(); ?></h1>
						<p class="keyVisual-read"><?php echo the_time('Y.m.d'); ?></p>
					</div>
				</div>
			</div>
				<?php the_post_thumbnail( 'full' ); ?>
		</div>
	</div>
	<div class="section">
		<div class="section-wrapper ">
			<div class="section-content">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					// the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- #main -->
			<?php get_sidebar();?>
		</div><!-- #primary -->
	</div>
<?php
// get_sidebar();
get_footer();
