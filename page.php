<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ah
 */

get_header(); ?>
	<div class="keyVisual">
		<div class="keyVisual-wrap keyVisual-wrap-none">
			<div class="keyVisual-overlay">
				<div class="keyVisual-gradation">
					<div class="keyVisual-titleBlock">
						<h1 class="keyVisual-title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-wrapper section-wrapper-narrow">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
<?php
get_footer();
