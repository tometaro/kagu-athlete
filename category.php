<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
						<h2 class="keyVisual-title"><?php single_cat_title(); ?>記事一覧</h2>
						<p class="keyVisual-read"><?php echo category_description(); ?> list of articles</p>
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
