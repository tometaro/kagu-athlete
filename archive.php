<?php
/**
 * The template for displaying archive pages
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
						<h2 class="keyVisual-title"><?php the_archive_title( $before, $after ); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-inner">
			<div class="section-innerWrap">
				<ul class="articleList">
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<?php get_template_part( 'template-parts/articleList' ); ?>
				<?php endwhile; endif; ?>
				</ul>
				<!--ページネーション-->
				 <?php if (function_exists('responsive_pagination')) {
					responsive_pagination($wp_query->max_num_pages);
				} ?>
			</div>
		</div>
	</div>
<?php
get_footer();
