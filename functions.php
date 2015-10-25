<?php
/**
 * Design Action! functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Design_Action!
 */

if( ! function_exists('sponsorship_data')) :
	function sponsorship_data(){
		$url = 'https://spreadsheets.google.com/feeds/list/1eaJf99RbkoxYpmozmxdFrBI2jBsN7-AOPCdNW87bTd4/od6/public/values?alt=json';
		$flag = true;
		try {
			$json = file_get_contents($url);
		} catch (Exception $e) {
			$flag = false;
		}
		$results = array();
		if($flag) :
			$json = json_decode($json, TRUE);
			$doc = $json['feed']['entry'];
			foreach ($doc as $key => $d) {
				$result = new StdClass;
				$result->no = $d['gsx$no']['$t'];
				$result->name = $d['gsx$name']['$t'];
				$result->image = $d['gsx$image']['$t'];
				$result->url = $d['gsx$url']['$t'];
				array_push($results, $result);
			}
		endif;

		return $results;
	}
	
endif;

if( ! function_exists('media_data')) :
	function media_data(){
		$url = 'https://spreadsheets.google.com/feeds/list/1Um7Qw-5XfT5_g00b737-TyEPLCj9oGt2OwkFCkO55LE/od6/public/values?alt=json';
		$flag = true;
		try {
			$json = file_get_contents($url);
		} catch (Exception $e) {
			$flag = false;
		}
		$results = array();
		if($flag) :
			$json = json_decode($json, TRUE);
			$doc = $json['feed']['entry'];
			foreach ($doc as $key => $d) {
				$result = new StdClass;
				$result->no = $d['gsx$no']['$t'];
				$result->name = $d['gsx$name']['$t'];
				$result->image = $d['gsx$image']['$t'];
				$result->url = $d['gsx$url']['$t'];
				array_push($results, $result);
			}
		endif;
		return $results;
	}
endif;

if( ! function_exists('speakers_data')) :

endif;

if ( ! function_exists( 'designaction_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function designaction_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Design Action!, use a find and replace
	 * to change 'designaction' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'designaction', get_template_directory() . '/languages' );

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
	add_theme_support('title-tag');
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'designaction' ),
	) );

	register_nav_menus( array(
		'footer-one' => esc_html__( 'Footer One Menu', 'designaction' ),
	) );

	register_nav_menus( array(
		'footer-two' => esc_html__( 'Footer Two Menu', 'designaction' ),
	) );

	register_nav_menus( array(
		'footer-three' => esc_html__( 'Footer Three Menu', 'designaction' ),
	) );

	register_nav_menus( array(
		'footer-four' => esc_html__( 'Footer Four Menu', 'designaction' ),
	) );

	register_nav_menus( array(
		'footer-five' => esc_html__( 'Footer Five Menu', 'designaction' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'designaction_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // designaction_setup
add_action( 'after_setup_theme', 'designaction_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function designaction_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'designaction_content_width', 640 );
}
add_action( 'after_setup_theme', 'designaction_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function designaction_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'designaction' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'designaction_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function designaction_scripts() {
	wp_enqueue_style( 'designaction-style', get_stylesheet_uri() );

	wp_enqueue_script( 'designaction-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'designaction-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'designaction_scripts' );

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
 * Filter the shortcode attributes.
 * If the ID parameter is not an integer, assume it is a slug.
 * Convert the slug to an ID and return the attributes.
 */
function metaslider_shortcode_slug( $atts ) {

	if ( isset( $atts['id'] ) && ! is_int( $atts['id'] ) ) {

        $slider = get_page_by_path( $atts['id'], OBJECT, 'ml-slider' );

        if ( $slider ) {
            $atts['id'] = $slider->ID;
        }

	}

	return $atts;

}
add_filter('shortcode_atts_metaslider', 'metaslider_shortcode_slug', 10, 3);

/**
 * Ensure the post_name (slug) is updated when a slideshow title
 * is updated.
 */
function metaslider_update_slug_on_save( $data , $postarr ) {

	if ( isset( $postarr['post_type'] ) && $postarr['post_type'] == 'ml-slider' ) {

	    $data[ 'post_name' ] = sanitize_title( $postarr[ 'post_title' ] );

	}

	return $data;

}
add_filter( 'wp_insert_post_data' , 'metaslider_update_slug_on_save' , 10, 2 );


class da_walker extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'dropdown',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
    // build html
    if($display_depth == 0){
    	$output .= "\n" . $indent . '<ul class="' . $class_names . ' small-block-grid-5">' . "\n";
    }else{
    	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
}
  
// add main/sub classes to li's and links
 function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item has-dropdown not-click' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

    if(is_array($args)){
    	$item_output = "";    		
    }else{
    	$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
        );
    }
  
    // build html
    $output .= apply_filters( 'da_walker_start_el', $item_output, $item, $depth, $args );
}
}
