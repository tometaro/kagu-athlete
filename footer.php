<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ah
 */

?>
		</main>
		<div class="section section-gray cvArea-visual">
			<div class="cvArea-visual-overay">
			<div class="section-wrapper">
				<?php get_template_part( 'template-parts/cvArea' ); ?>
			</div>
		</div>

		<?php wp_reset_query(); if ( !is_home() && !is_front_page() ) : ?>
		<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
			<div class="breadcrumbs-inner">
				<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}?>
			</div>
		</div>
		<?php endif; ?>

		<footer class="footer" role="contentinfo">
			<div class="footer-wrap">
				<div class="footer-navi">
					<div class="footer-block">
						<?php wp_nav_menu(array('menu' => 'footermenu1')); ?>
					</div>
					<div class="footer-block">
						<?php wp_nav_menu(array('menu' => 'footermenu2')); ?>
					</div>
					<div class="footer-blanding">
						<img class="footer-logo-mark" src="<?php bloginfo('template_directory'); ?>/images/logo-mark-white.svg">
						<div class="footer-logo-type">家具アスリート</div>
					</div>
				</div>
			</div>
			<div class="footer-info">Copyright © <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> </a>All Rights Reserved.
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
