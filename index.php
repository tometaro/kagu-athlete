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
		<div class="hero-logoVisul"></div>
	</div>

	<?php get_template_part( 'template-parts/cvArea' ); ?>

	<div class="section">
		<div class="section-wrapper">
			<p>神戸市灘区を中心に、’家具アスリート’では高級家具から大型家具、アンティーク家具まで<br>他店では引き取れないような家具も専門知識のあるスタッフが丁寧に出張買取、搬出させていただきます。</p>
		</div>
	</div>

	<?php get_template_part( 'template-parts/feature' ); ?>

	<div class="section">
		<?php $categories = get_categories(); foreach($categories as $category) :?>
			<div class="section-inner">
				<div class="section-innerWrap">
					<div class="section-titleWrap">
						<h2 class="title-underLine"><?php echo $category->cat_name; ?></h2>
						<p class="section-read"><?php echo $category->category_description; ?></p>
					</div>
					<ul class="articleList">
						<?php query_posts('showposts=6&cat='.$category->cat_ID);
						if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'template-parts/articleList' ); ?>

						<?php endwhile; endif; ?>
					</ul>
					<div class="button-wrapper">
						<a class="button button-ghost" href="<?php echo get_category_link($category->cat_ID);?>">もっと見る</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php
// get_sidebar();
get_footer();
