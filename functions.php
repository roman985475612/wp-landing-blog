<?php
/**
 * blueRex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blueRex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bluerex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bluerex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on blueRex, use a find and replace
		 * to change 'bluerex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bluerex', get_template_directory() . '/languages' );

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
		register_nav_menus([
            'header_menu' => esc_html__( 'Header menu', 'bluerex' ),
        ]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bluerex_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bluerex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bluerex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bluerex_content_width', 640 );
}
add_action( 'after_setup_theme', 'bluerex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bluerex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left', 'bluerex' ),
			'id'            => 'sidebar-footer1',
			'description'   => esc_html__( 'Add widgets here.', 'bluerex' ),
			'before_widget' => '<div id="%1$s" class="col-md-6 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right', 'bluerex' ),
			'id'            => 'sidebar-footer2',
			'description'   => esc_html__( 'Add widgets here.', 'bluerex' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Category Right', 'bluerex' ),
			'id'            => 'sidebar-category',
			'description'   => esc_html__( 'Add widgets here.', 'bluerex' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bluerex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bluerex_scripts() {
	wp_enqueue_style( 'bluerex-font-opensans'         , 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap' );
	wp_enqueue_style( 'bluerex-font-notoserif'        , 'https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap' );
	wp_enqueue_style( 'bluerex-poppins'               , 'https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap' );
	wp_enqueue_style( 'bluerex-style'                 , get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-bootstrap-style'       , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bluerex-preloader-style'       , get_template_directory_uri() . '/assets/css/preloader.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-font-awesome-style'    , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' );
	wp_enqueue_style( 'bluerex-baguettebox-style'     , 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css' );
	wp_enqueue_style( 'bluerex-main-style'            , get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-buttons-style'         , get_template_directory_uri() . '/assets/css/buttons.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-header-style'          , get_template_directory_uri() . '/assets/css/header.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-watch-style'   , get_template_directory_uri() . '/assets/css/section-watch.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-progress-style', get_template_directory_uri() . '/assets/css/section-progress.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-lets-style'    , get_template_directory_uri() . '/assets/css/section-lets.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-design-style'  , get_template_directory_uri() . '/assets/css/section-design.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-work-style'    , get_template_directory_uri() . '/assets/css/section-work.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-reviews-style' , get_template_directory_uri() . '/assets/css/section-reviews.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-section-form-style'    , get_template_directory_uri() . '/assets/css/section-form.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-footer-style'          , get_template_directory_uri() . '/assets/css/footer.css', array(), _S_VERSION );
	wp_enqueue_style( 'bluerex-blog-style'            , get_template_directory_uri() . '/assets/css/blog.css', array(), _S_VERSION );
    
	wp_style_add_data( 'bluerex-style', 'rtl', 'replace' );
	
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bluerex-bootstrap'  , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );	
    wp_enqueue_script( 'bluerex-baguettebox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js' );
	wp_enqueue_script( 'bluerex-main'       , get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bluerex-navigation' , get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bluerex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';

}

add_action( 'init', 'bluerex_reviews' );
function bluerex_reviews() {
    register_post_type( 'reviews', [
        'labels' => [
            'name'          => 'Отзывы',
            'singular_name' => 'Отзыв',
            'add_new'       => __( 'Добавить новый отзыв', 'bluerex' ),
            'add_new_item'  => __( 'Новый отзыв', 'bluerex' ),
            'edit_item'     => __( 'Редактировать', 'bluerex' ),
            'new_item'      => __( 'Новый отзыв', 'bluerex' ),
            'view_item'     => __( 'Посмотреть', 'bluerex' ),
            'menu_name'     => 'Отзывы клиентов',
            'all_items'     => 'Все отзывы',
        ],
        'public'       => true,
        'supports'     => ['title', 'editor', 'thumbnail'],
        'menu_icon'    => 'dashicons-universal-access',
        'show_in_rest' => true
    ] );
}

add_filter( 'pre_get_posts', 'bluerex_exclude_category' );
function bluerex_exclude_category( $query ) {
    if ( $query->is_home ) {
        $query->set( 'category__not_in', [7, 8, 10, 11] );
    }
    return $query;
}

add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ) {
    return '
    <nav class="navigation %1$s" role="navigation" aria-label="Page navigation example">
        %3$s
    </nav>
    ';
}

// Custom code

function bluerex_dd($data) {
    echo '<pre style="font-size: 16px; ">' . print_r($data, true) . '</pre>';
    die;
}

function bluerex_helper($tagName, $content) {
    return <<<EOT
<$tagName>$content</$tagName>    
EOT;
}

function bluerex_show_field($tagName, $fieldName, $category = null) {
    if ( $field = get_field( $fieldName, $category ) ) {
        echo bluerex_helper($tagName, $field);
    }
}

function bluerex_get_field($selector, $post_id = null) {
    if ( $value = get_field( $selector, $post_id ) ) {
        return $value;
    }
}

function bluerex_show_img($tagName, $fieldName, $category = null) {
    if ( $field = get_field( $fieldName, $category ) ) {
        echo '<img src="'.$field.'">';  
    }
}

function bluerex_get_background($field, $category = null, $cover = true) {
    $style = null;
    if ( $backgroundUrl = get_field($field, $category) ) {
        $add_style = $cover ? ' background-size: cover': '';
        $style = <<<EOT
 style="background: url($backgroundUrl) center no-repeat;$add_style"
EOT;
    }
    return $style;
}

function bluerex_get_youtube_url( $url ) {
    $embed_url = '';
    $cnt = 0;
    $embed_url = str_replace('watch?v=', 'embed/', $url, $cnt);
    if ($cnt == 0) {
        $embed_url = str_replace('youtu.be/', 'youtube.com/embed/', $url);
    }
    
    return $embed_url;
}

function bluerex_get_post_thumbnail( $postID ) {
    if ( has_post_thumbnail( $postID ) ) {
        return get_the_post_thumbnail( $postID );
    }
}