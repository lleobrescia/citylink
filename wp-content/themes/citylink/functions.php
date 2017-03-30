<?php
/**
 * Citylink functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Citylink
 */

if (! function_exists( 'citylink_setup' )) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
    function citylink_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Citylink, use a find and replace
         * to change 'citylink' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'citylink', get_template_directory() . '/languages' );

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
        'menu-1' => esc_html__( 'Primary', 'citylink' ),
        'menu-footer' => esc_html__( 'Footer', 'citylink' ),
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
            add_theme_support( 'custom-background', apply_filters( 'citylink_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
            ) ) );

            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'citylink_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function citylink_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'citylink_content_width', 640 );
}
add_action( 'after_setup_theme', 'citylink_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function citylink_widgets_init()
{
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'citylink' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'citylink' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'citylink_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function citylink_scripts()
{
    wp_enqueue_style( 'citylink-style', get_stylesheet_uri() );

    // wp_enqueue_style( 'citylink-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'citylink-fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array('citylink-style') );

    // wp_enqueue_script( 'citylink-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'citylink-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array('jquery') );

    wp_enqueue_script( 'citylink-jquery-ui','https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery') );

    wp_enqueue_script( 'citylink-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if (is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }

  // TEMPLATE JS
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/template/bootstrap.min.js', array('jquery') );
    // wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/template/owl.carousel.min.js', array('jquery') );
    // wp_enqueue_script( 'ajax-contact', get_template_directory_uri() . '/js/template/ajax-contact.js', array('jquery') );
    // wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/js/template/meanmenu.js', array('jquery') );
    // wp_enqueue_script( 'jquery.nav.min', get_template_directory_uri() . '/js/template/jquery.nav.min.js', array('jquery') );
    // wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/template/jquery.magnific-popup.min.js', array('jquery') );
    // wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/js/template/jquery.easing.1.3.js', array('jquery') );
    // wp_enqueue_script( 'jquery.scrollUp', get_template_directory_uri() . '/js/template/jquery.scrollUp.js', array('jquery') );
    // wp_enqueue_script( 'jquery.matchHeight-min', get_template_directory_uri() . '/js/template/jquery.matchHeight-min.js', array('jquery') );
    // wp_enqueue_script( 'jquery.counterup', get_template_directory_uri() . '/js/template/jquery.counterup.js', array('jquery') );
    // wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/template/waypoints.js', array('jquery') );
    // wp_enqueue_script( 'YTPlayer.min', get_template_directory_uri() . '/js/template/YTPlayer.min.js', array('jquery') );
    // wp_enqueue_script( 'google maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk', array('jquery') );
    // wp_enqueue_script( 'map-active', get_template_directory_uri() . '/js/template/map-active.js', array('jquery') );
    // wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/template/wow.min.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'citylink_scripts' );

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
 * Menu Admin for theme settings
 */
require get_template_directory() . '/inc/theme-settings.php';
