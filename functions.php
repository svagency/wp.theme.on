<?php

/**
 * Bootscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootscore
 */

// Register Bootstrap 5 Nav Walker
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
    require_once('inc/class-bootstrap-5-navwalker.php');
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');
// Register Bootstrap 5 Nav Walker END


if (!function_exists('bootscore_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function bootscore_setup() {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bootscore, use a find and replace
		 * to change 'bootscore' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('bootscore', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support('html5', array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;
add_action('after_setup_theme', 'bootscore_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootscore_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('bootscore_content_width', 640);
}
add_action('after_setup_theme', 'bootscore_content_width', 0);





/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Widgets
if (!function_exists('bootscore_widgets_init')) :

  function bootscore_widgets_init() {

    // Top Nav
    register_sidebar(array(
      'name' => esc_html__('Top Nav', 'bootscore'),
      'id' => 'top-nav',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="ms-3">',
      'after_widget' => '</div>',
      'before_title' => '<div class="widget-title d-none">',
      'after_title' => '</div>'
    ));
    // Top Nav End

    // Top Nav Search
    register_sidebar(array(
      'name' => esc_html__('Top Nav Search', 'bootscore'),
      'id' => 'top-nav-search',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="top-nav-search">',
      'after_widget' => '</div>',
      'before_title' => '<div class="widget-title d-none">',
      'after_title' => '</div>'
    ));
    // Top Nav Search End

    // Sidebar
    register_sidebar(array(
      'name'          => esc_html__('Sidebar', 'bootscore'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 bg-light border-0">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title card-title border-bottom py-2">',
      'after_title'   => '</h2>',
    ));
    // Sidebar End

    // Top Footer
    register_sidebar(array(
      'name' => esc_html__('Top Footer', 'bootscore'),
      'id' => 'top-footer',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-5">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    ));
    // Top Footer End

    // Footer 1
    register_sidebar(array(
      'name' => esc_html__('Footer 1', 'bootscore'),
      'id' => 'footer-1',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title h4">',
      'after_title' => '</h2>'
    ));
    // Footer 1 End

    // Footer 2
    register_sidebar(array(
      'name' => esc_html__('Footer 2', 'bootscore'),
      'id' => 'footer-2',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title h4">',
      'after_title' => '</h2>'
    ));
    // Footer 2 End

    // Footer 3
    register_sidebar(array(
      'name' => esc_html__('Footer 3', 'bootscore'),
      'id' => 'footer-3',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title h4">',
      'after_title' => '</h2>'
    ));
    // Footer 3 End

    // Footer 4
    register_sidebar(array(
      'name' => esc_html__('Footer 4', 'bootscore'),
      'id' => 'footer-4',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title h4">',
      'after_title' => '</h2>'
    ));
    // Footer 4 End

    // 404 Page
    register_sidebar(array(
      'name' => esc_html__('404 Page', 'bootscore'),
      'id' => '404-page',
      'description' => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="mb-4">',
      'after_widget' => '</div>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>'
    ));
    // 404 Page End

  }
  add_action('widgets_init', 'bootscore_widgets_init');


endif;
// Widgets END

// Shortcode in HTML-Widget
add_filter('widget_text', 'do_shortcode');
// Shortcode in HTML-Widget End

// Add <link rel=preload> to Fontawesome
add_filter('style_loader_tag', 'wpse_231597_style_loader_tag');

function wpse_231597_style_loader_tag($tag) {

  $tag = preg_replace("/id='font-awesome-css'/", "id='font-awesome-css' online=\"if(media!='all')media='all'\"", $tag);

  return $tag;
}
// Add <link rel=preload> to Fontawesome END

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

// Amount of posts/products in category
if (!function_exists('wpsites_query')) :

  function wpsites_query($query) {
    if ($query->is_archive() && $query->is_main_query() && !is_admin()) {
      $query->set('posts_per_page', 24);
    }
  }
  add_action('pre_get_posts', 'wpsites_query');

endif;
// Amount of posts/products in category END


// Pagination Categories
if (!function_exists('bootscore_pagination')) :

  function bootscore_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if ($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages;

      if (!$pages)
        $pages = 1;
    }

    if (1 != $pages) {
      echo '<nav aria-label="Page navigation" role="navigation">';
      echo '<span class="sr-only">Page navigation</span>';
      echo '<ul class="pagination justify-content-center ft-wpbs mb-4">';


      if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '" aria-label="First Page">&laquo;</a></li>';

      if ($paged > 1 && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '" aria-label="Previous Page">&lsaquo;</a></li>';

      for ($i = 1; $i <= $pages; $i++) {
        if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems))
          echo ($paged == $i) ? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
      }

      if ($paged < $pages && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(($paged === 0 ? 1 : $paged) + 1) . '" aria-label="Next Page">&rsaquo;</a></li>';

      if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="Last Page">&raquo;</a></li>';

      echo '</ul>';
      echo '</nav>';
      // Uncomment this if you want to show [Page 2 of 30]
      // echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';
    }
  }

endif;
//Pagination Categories END


// Pagination Buttons Single Posts
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
  $code = 'class="page-link"';
  return str_replace('<a href=', '<a ' . $code . ' href=', $output);
}
// Pagination Buttons Single Posts END


// Excerpt to pages
add_post_type_support('page', 'excerpt');
// Excerpt to pages END


// Breadcrumb
if (!function_exists('the_breadcrumb')) :
  function the_breadcrumb() {
    if (!is_home()) {
      echo '<nav class="breadcrumb mb-4 mt-2 bg-light py-2 px-3 small rounded">';
      echo '<a href="' . home_url('/') . '">' . ('<i class="fas fa-home"></i>') . '</a><span class="divider">&nbsp;/&nbsp;</span>';
      if (is_category() || is_single()) {
        the_category(' <span class="divider">&nbsp;/&nbsp;</span> ');
        if (is_single()) {
          echo ' <span class="divider">&nbsp;/&nbsp;</span> ';
          the_title();
        }
      } elseif (is_page()) {
        echo the_title();
      }
      echo '</nav>';
    }
  }
  add_filter('breadcrumbs', 'breadcrumbs');
endif;
// Breadcrumb END


// Comment Button
function bootscore_comment_form($args) {
  $args['class_submit'] = 'btn btn-outline-primary'; // since WP 4.1
  return $args;
}
add_filter('comment_form_defaults', 'bootscore_comment_form');
// Comment Button END


// Password protected form
function bootscore_pw_form() {
  $output = '
		  <form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="form-inline">' . "\n"
    . '<input name="post_password" type="password" size="" class="form-control me-2 my-1" placeholder="' . __('Password', 'bootscore') . '"/>' . "\n"
    . '<input type="submit" class="btn btn-outline-primary my-1" name="Submit" value="' . __('Submit', 'bootscore') . '" />' . "\n"
    . '</p>' . "\n"
    . '</form>' . "\n";
  return $output;
}
add_filter("the_password_form", "bootscore_pw_form");
// Password protected form END


// Allow HTML in term (category, tag) descriptions
foreach (array('pre_term_description') as $filter) {
  remove_filter($filter, 'wp_filter_kses');
  if (!current_user_can('unfiltered_html')) {
    add_filter($filter, 'wp_filter_post_kses');
  }
}

foreach (array('term_description') as $filter) {
  remove_filter($filter, 'wp_kses_data');
}
// Allow HTML in term (category, tag) descriptions END


// Allow HTML in author bio
remove_filter('pre_user_description', 'wp_filter_kses');
add_filter('pre_user_description', 'wp_filter_post_kses');
// Allow HTML in author bio END


// Hook after #primary
function bs_after_primary() {
  do_action('bs_after_primary');
}
// Hook after #primary END


// Open links in comments in new tab
if (!function_exists('bs_comment_links_in_new_tab')) :
  function bs_comment_links_in_new_tab($text) {
    return str_replace('<a', '<a target="_blank" rel=”nofollow”', $text);
  }
  add_filter('comment_text', 'bs_comment_links_in_new_tab');
endif;
// Open links in comments in new tab END


// Disable Gutenberg blocks in widgets (WordPress 5.8)
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');
// Disable Gutenberg blocks in widgets (WordPress 5.8) END

//-------------- ON ---------------------------------------------------------------


function remove_query_strings() {
     if(!is_admin()) {
         add_filter('script_loader_src', 'remove_query_strings_split', 15);
         add_filter('style_loader_src', 'remove_query_strings_split', 15);
     }
 }
 function remove_query_strings_split($src){
     $output = preg_split("/(&ver|\?ver)/", $src);
     return $output[0];
 }

add_filter('xmlrpc_enabled', '__return_false');
add_filter('wp_headers', 'remove_x_pingback');
add_filter('pings_open', '__return_false', 9999);

function remove_x_pingback($headers) {
     unset($headers['X-Pingback'], $headers['x-pingback']);
     return $headers;
}

add_filter('wp_default_scripts', 'remove_jquery_migrate');

function remove_jquery_migrate(&$scripts) {
     if(!is_admin()) {
         $scripts->remove('jquery');
         $scripts->add('jquery', false, array( 'jquery-core' ), '1.12.4');
     }
 }

remove_action('wp_head', 'wp_generator');
add_filter('the_generator', 'hide_wp_version');

function hide_wp_version() {
     return '';
 }


remove_action('wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action ('template_redirect', 'wp_shortlink_header', 11, 0);

remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action ('template_redirect', 'wp_shortlink_header', 11, 0);

add_action('pre_ping', 'disable_self_pingbacks');

function disable_self_pingbacks(&$links) {
     $home = get_option('home');
     foreach($links as $l => $link) {
         if(strpos($link, $home) === 0) {
             unset($links[$l]);
         }
     }
 }

remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

add_action('wp_enqueue_scripts', 'disable_dashicons');

function disable_dashicons() {
     if(!is_admin()) {
         wp_dequeue_style('dashicons');
         wp_deregister_style('dashicons');
     }
 }





// remove some meta tags from WordPress
remove_action('wp_head', 'wp_generator');
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }

    return $hints;
}
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');

//remove json api capabilities
function remove_json_api () {

    // Remove the REST API lines from the HTML Header
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // Remove the REST API endpoint.
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Turn off oEmbed auto discovery.
    add_filter( 'embed_oembed_discover', '__return_false' );

    // Don't filter oEmbed results.
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

    // Remove oEmbed discovery links.
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );

}
add_action( 'after_setup_theme', 'remove_json_api' );

//completely disable json api
function disable_json_api () {

  // Filters for WP-API version 1.x
  add_filter('json_enabled', '__return_false');
  add_filter('json_jsonp_enabled', '__return_false');

  // Filters for WP-API version 2.x
  add_filter('rest_enabled', '__return_false');
  add_filter('rest_jsonp_enabled', '__return_false');

}
add_action( 'after_setup_theme', 'disable_json_api' );

// Remove auto generated feed links
function my_remove_feeds() {
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
}
add_action( 'after_setup_theme', 'my_remove_feeds' );

add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

//remove emoji scripts from head
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// remove adminbar
add_filter('show_admin_bar', '__return_false');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


//add raptive js
function add_raptive_js(){
  wp_enqueue_script( 'raptive-script', get_template_directory_uri() . '/js/min/raptive.min.js' );
}
add_action( 'init', 'add_raptive_js', 9999 );

/* skin login - needs to be sepparte css though*/
function my_login_logo() { ?>
    <style type="text/css">
        body.login {
		
			background-color: #000 !important;
		
        }
		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>