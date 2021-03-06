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
	<section class="hero">
		<div class="hero-white">
			<div class="hero-wrap">
				<h1 class="hero-title">家具アスリート</h1>
				<p class="hero-text"><?php bloginfo('description'); ?></p>
			</div>
			<?php get_template_part( 'template-parts/cvArea' ); ?>
		</div>
		<div class="hero-overay"></div>
		<div class="hero-visual hero-visual-1st"></div>
		<div class="hero-visual hero-visual-2nd"></div>
		<div class="hero-visual hero-visual-3rd"></div>
		<div class="hero-visual hero-visual-4th"></div>
	</section>

	<section class="section">
		<div class="section-wrapper section-wrapper-center section-read">
			<h2 class="title-underLine">ごあいさつ</h2>
			<p >家具アスリート（Kagu Athlete）では兵庫県神戸市灘区を中心に、明石、芦屋、大阪など、関西圏で家具の買取を行なっております。高級家具から大型家具、アンティーク家具まで他店では引き取れないような家具も専門知識のあるスタッフが丁寧に出張買取、搬出させていただきます。</p>
		</div>
	</section>

	<section class="section">
		<?php get_template_part( 'template-parts/feature' ); ?>
	</section>

	<section class="section">
			<div class="section-wrapper section-wrapper-articleList section-center">
				<div class="section-titleWrap">
					<h2 class="title-underLine">買取実績</h2>
				</div>
				<div class="articleList ">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<?php get_template_part( 'template-parts/articleList' ); ?>

					<?php endwhile; endif; ?>
				</div>

				<!--ページネーション-->

				<div class="pagination-section">
						<?php get_template_part( 'infinite-scroll' ); ?>

						<?php if (function_exists('responsive_pagination')) {
							responsive_pagination($wp_query->max_num_pages);
						} ?>
				</div>
			</div>
	</section>
<?php
// get_sidebar();
get_footer();
