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
		</div>
		<div class="glitch imgloaded">
			<div class="hero-logoVisul glitch__img"></div>
			<div class="hero-logoVisul glitch__img"></div>
			<div class="hero-logoVisul glitch__img"></div>
			<div class="hero-logoVisul glitch__img"></div>
			<div class="hero-logoVisul glitch__img"></div>
		</div>
	</div>

	<div class="section">
		<?php $categories = get_categories(); foreach($categories as $category) :?>
			<div class="section-inner">
				<div class="section-innerWrap">
					<div class="section-titleWrap">
						<h2 class="section-title"><?php echo $category->cat_name; ?></h2>
						<p class="section-read"><?php echo $category->category_description; ?></p>
					</div>
					<ul class="articleList">
						<?php query_posts('showposts=6&cat='.$category->cat_ID);
						if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'template-parts/articleList' ); ?>

						<?php endwhile; endif; ?>
					</ul>
					<div class="button-wrapper">
						<a class="button" href="<?php echo get_category_link($category->cat_ID);?>">もっと見る</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php
// get_sidebar();
get_footer();
