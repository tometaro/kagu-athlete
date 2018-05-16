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
	<div class="hero">
		<div class="hero-white">
			<div class="hero-wrap">
				<h1 class="hero-title">家具アスリート</h1>
				<p class="hero-text"><?php bloginfo('description'); ?></p>
			</div>
			<?php get_template_part( 'template-parts/cvArea' ); ?>
		</div>
		<div class="hero-logoVisul"></div>
	</div>

	<div class="section">
		<div class="section-wrapper section-wrapper-center">
			<h2 class="title-underLine">ごあいさつ</h2>
			<p class="section-read">神戸市灘区を中心に、’家具アスリート’では高級家具から大型家具、アンティーク家具まで<br>他店では引き取れないような家具も専門知識のあるスタッフが丁寧に出張買取、搬出させていただきます。</p>
		</div>
	</div>

	<div class="section">
		<?php get_template_part( 'template-parts/feature' ); ?>
	</div>

	<div class="section">
			<div class="section-wrapper section-wrapper-articleList section-wrapper-center">
				<div class="section-titleWrap">
					<h2 class="title-underLine">買取実績</h2>
				</div>
				<ul class="articleList">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<?php get_template_part( 'template-parts/articleList' ); ?>

					<?php endwhile; endif; ?>
				</ul>
				<!-- <div class="button-wrapper">
					<a class="button button-ghost" href="">もっと見る</a>
				</div> -->
			</div>
	</div>
<?php
// get_sidebar();
get_footer();
