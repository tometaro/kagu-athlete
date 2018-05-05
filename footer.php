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
						<div class="footer-logo-type">
							<svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
							 y="0px" viewBox="0 0 93.08 24.002" style="enable-background:new 0 0 93.08 24.002;" xml:space="preserve">
								<g>
									<path d="M10.343,2.939l-6.552,18h3.193l1.457-4.002h7.277l1.457,4.002h3.193l-6.551-18H10.343z M9.533,13.938
										l2.547-6.997l2.547,6.997H9.533z"/>
									<polygon points="56.018,10.438 48.018,10.438 48.018,2.938 45.018,2.938 45.018,10.438 45.018,13.438 45.018,20.938
										48.018,20.938 48.018,13.438 56.018,13.438 56.018,20.938 59.018,20.938 59.018,13.438 59.018,10.438 59.018,2.938 56.018,2.938
										"/>
									<path d="M38.08,2.939h-3v4h-3v3h3v8c0,1.657,1.343,3,3,3h3v-3h-2c-0.552,0-1-0.448-1-1v-7h3v-3h-3V2.939z"/>
									<path d="M26.08,8.32V6.939h-3v14h3v-8c0-1.657,1.343-3,3-3h1v-3h-1C27.877,6.939,26.81,7.478,26.08,8.32z"/>
									<path d="M84.08,6.939c-1.094,0-2.117,0.298-3,0.809V2.939h-3v10v1v1v6h3V20.13c0.883,0.512,1.906,0.809,3,0.809
										c3.314,0,6-2.686,6-6v-1v-1C90.08,9.626,87.394,6.939,84.08,6.939z M87.08,14.939c0,1.657-1.343,3-3,3s-3-1.343-3-3v-2
										c0-1.657,1.343-3,3-3s3,1.343,3,3V14.939z"/>
									<path d="M71.08,15.939c0,1.105-0.896,2-2,2h-1c-1.104,0-2-0.895-2-2v-9h-3v9c0,2.761,2.239,5,5,5h1
										c0.712,0,1.387-0.154,2-0.422v0.422h3v-14h-3V15.939z"/>
								</g>
							</svg>
						</div>
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
