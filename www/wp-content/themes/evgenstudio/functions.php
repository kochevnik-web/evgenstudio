<?php
/**
 * evgenstudio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evgenstudio
 */

if ( ! function_exists( 'evgenstudio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function evgenstudio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on evgenstudio, use a find and replace
		 * to change 'evgenstudio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'evgenstudio', get_template_directory() . '/languages' );

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
		add_image_size( 'kreditka-thumb', 540, 237, false );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'evgenstudio' ),
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
		add_theme_support( 'custom-background', apply_filters( 'evgenstudio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 34,
			'width'       => 138,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'evgenstudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function evgenstudio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'evgenstudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'evgenstudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function evgenstudio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'evgenstudio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'evgenstudio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'evgenstudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function evgenstudio_scripts() {
	wp_enqueue_style( 'evgenstudio-style', get_stylesheet_uri() );

	wp_enqueue_style( 'preloader-style', get_template_directory_uri() . '/css/preloader.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/css/hamburgers.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'evgenstudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

	wp_enqueue_script( 'evgenstudio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'evgenstudio_scripts' );

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

	//Регистрация нового типа записи
	function registr_kreditka() {
		register_post_type( 'project', array(
			'labels'             => array(
				'name'               => 'Проекты',
				'singular_name'      => 'Проект',
				'add_new'            => 'Добавить проект',
				'add_new_item'       => 'Добавить новый проект',
				'edit_item'          => 'Редактировать проект',
				'new_item'           => 'Новый проект',
				'view_item'          => 'Посмотреть проект',
				'search_items'       => 'Найти проект',
				'not_found'          => 'Проектов не найдено',
				'not_found_in_trash' => 'В корзине проектов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Проекты'

			),
			'public'             => true,
			'has_archive'        => true,
			'taxonomies'         => array( 'project_cat' ),
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
		) );
	}

	//Регистарция таксономии для типа записи кредитные карты
	function registr_cat_kreditka() {
		register_taxonomy( 'project_cat', array( 'project' ), array(
			'label'                 => '',
			'labels'                => array(
				'name'              => 'Категории проектов',
				'singular_name'     => 'Категория',
				'search_items'      => 'Искать категории проектов',
				'all_items'         => 'Все категории',
				'parent_item'       => 'Родительская категория',
				'parent_item_colon' => 'Родительская категория:',
				'edit_item'         => 'Редактировать категорию проектов',
				'update_item'       => 'Обновить категорию проектов',
				'add_new_item'      => 'Добавить категорию проектов',
				'new_item_name'     => 'Новая категория проектов',
				'menu_name'         => 'Категории',
			),
			'description'           => '',
			'public'                => true,
			'hierarchical'          => true,
			'meta_box_cb'           => 'post_categories_meta_box',
			'rewrite'               => array( 'slug' => 'project_cat' ),
		) );
	}

	add_action( 'init', 'registr_kreditka' );
	add_action( 'init', 'registr_cat_kreditka' );

	function evgenstudio_galary_shortcode( $atts ) {

		global $post;
		$galary = get_post_meta( $post->ID, 'galary', true );

		if ( !(bool)$galary || count( $galary ) == 0 ) return '';

		$html = '<div class="swiper-container">';
		$html .= '<div class="swiper-wrapper">';

		foreach ( $galary as $item ) {
			$img = wp_get_attachment_image_url( $item, 'full' );
			$html .= '<div class="swiper-slide"><img src="' . $img . '" ></div>';
		}

		$html .= '</div>';
		
		$html .= '<div class="swiper-button-next"></div>';
		$html .= '<div class="swiper-button-prev"></div>';
		$html .= '</div>';
		
		return $html;

    }

    add_shortcode( 'evgenstudio_galary', 'evgenstudio_galary_shortcode' );



