<?php
/**
 * ah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ah
 */

if ( ! function_exists( 'ah_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ah_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ah, use a find and replace
	 * to change 'ah' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ah', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'ah' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ah_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ah_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ah_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ah_content_width', 640 );
}
add_action( 'after_setup_theme', 'ah_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ah_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ah' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="sidebar-title widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ah_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ah_scripts() {
	wp_enqueue_style( 'ah-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ah-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ah-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ah_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * custom-script.
 */
function my_scripts() {
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// admin bar to the bottom
function oz_admin_bar_to_the_bottom() {
  echo '<style type="text/css">
  #wpadminbar {
    top: auto !important;
    bottom: 0;
  }
  </style>';
}
// on frontend area
add_action( 'wp_head', 'oz_admin_bar_to_the_bottom' );

//320×180のサムネイルを作成
add_image_size('thumb320',320,180,true);

//ページネーション
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}

//フッターナビ
register_nav_menu( 'footer-menu', 'フッターメニュー' );
register_nav_menu( 'footer-menu2', 'ミュー' );


// pタグを非表示
remove_filter('term_description', 'wpautop');
