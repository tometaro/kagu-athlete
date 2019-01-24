<?php
/**
 * Template Name: Page_all
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
						<h2 class="keyVisual-title">買取特集</h2>
						<p class="keyVisual-read"><?php echo category_description(); ?> list of articles</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="section">
			<div class="section-wrapper section-wrapper-articleList section-wrapper-center">
				<div class="section-titleWrap">
					<h2 class="title-underLine">買取実績</h2>
				</div>
				<div class="articleList">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<?php get_template_part( 'template-parts/articleList' ); ?>

					<?php endwhile; endif; ?>
				</div>
				<!-- <div class="button-wrapper">
					<a class="button button-ghost" href="">もっと見る</a>
				</div> -->
				<?php get_template_part( 'infinite-scroll' ); ?>

				<!--ページネーション-->
				 <?php if (function_exists('responsive_pagination')) {
					responsive_pagination($wp_query->max_num_pages);
				} ?>
			</div>
	</section>

    
<?php
// get_sidebar();
get_footer();
