<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ah
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icon-font/dist/css/symbols.css" >

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ah' ); ?></a>

    <header class="header">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-branding">
        <img class="header-logo-mark" src="<?php bloginfo('template_directory'); ?>/images/logo-mark.svg">
        <div class="header-logo-type">家具アスリート</div>
      </a>
      <nav class="navi" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        <div class="navi-shadow"></div>
      </nav><!-- #site-navigation -->

      <div class="naviToggle">
        <div class="naviToggle-inner">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <nav class="spNavi naviToggle-block" role="navigation">
        <div class="spNavi-inner">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
      </nav><!-- #site-navigation -->
      <div class="naviToggle-block-shadow"></div>
    </header><!-- #masthead -->

    <main>
