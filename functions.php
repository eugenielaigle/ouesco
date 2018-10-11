<?php
/**
 * ouesco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ouesco
 */

if ( ! function_exists( 'ouesco_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ouesco_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ouesco, use a find and replace
		 * to change 'ouesco' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ouesco', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ouesco' ),
			'menu-footer' => esc_html__( 'Footer', 'ouesco' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ouesco_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ouesco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ouesco_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ouesco_content_width', 640 );
}
add_action( 'after_setup_theme', 'ouesco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ouesco_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ouesco' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ouesco' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ouesco_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ouesco_scripts() {
	// wp_enqueue_style( 'ouesco-style', get_stylesheet_uri() );

	// style.min.css
	wp_register_style('scss-style', get_template_directory_uri().'/assets/css/style.min.css', array());
	wp_enqueue_style('scss-style');

	wp_enqueue_script( 'ouesco-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ouesco-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ouesco_scripts' );

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


/******************************************************************************/

// MASQUER LES ARTICLES DANS LE MENU WORDPRESS
function remove_menu_items() {
  global $menu;
  $restricted = array(__('Posts'), __('Comments'));
  end ($menu);
  while (prev($menu)){
    $value = explode(' ',$menu[key($menu)][0]);
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
      unset($menu[key($menu)]);}
    }
  }

add_action('admin_menu', 'remove_menu_items');


// CUSTOM POST UI
function cptui_register_my_cpts() {

	/**
	 * Post Type: actions.
	 */

	$labels = array(
		"name" => __( "actions", "ouesco" ),
		"singular_name" => __( "action", "ouesco" ),
		"menu_name" => __( "Actions", "ouesco" ),
		"all_items" => __( "Toutes les actions", "ouesco" ),
		"add_new" => __( "Ajouter", "ouesco" ),
		"add_new_item" => __( "Ajouter une nouvelle action", "ouesco" ),
		"edit_item" => __( "Modifier une action", "ouesco" ),
		"new_item" => __( "Nouvelle action", "ouesco" ),
		"view_item" => __( "Voir l'action", "ouesco" ),
		"view_items" => __( "Voir les actions", "ouesco" ),
		"search_items" => __( "Rechercher une action", "ouesco" ),
		"not_found" => __( "Pas d'actions trouvées", "ouesco" ),
		"not_found_in_trash" => __( "Pas d'actions trouvées dans la corbeille", "ouesco" ),
		"featured_image" => __( "Image à la une Action", "ouesco" ),
		"set_featured_image" => __( "Modifier l'image à la une", "ouesco" ),
		"remove_featured_image" => __( "Supprimer", "ouesco" ),
		"use_featured_image" => __( "Utiliser", "ouesco" ),
		"items_list" => __( "Liste des actions", "ouesco" ),
	);

	$args = array(
		"label" => __( "actions", "ouesco" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => "actions",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "actions", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail", "custom-fields" ),
	);

	register_post_type( "actions", $args );

	/**
	 * Post Type: documents officiels.
	 */

	$labels = array(
		"name" => __( "documents officiels", "ouesco" ),
		"singular_name" => __( "fond documentaire", "ouesco" ),
		"menu_name" => __( "Fond documentaire", "ouesco" ),
		"all_items" => __( "Tous les documents", "ouesco" ),
		"add_new" => __( "Ajouter un nouveau", "ouesco" ),
		"add_new_item" => __( "Ajouter un document", "ouesco" ),
		"edit_item" => __( "Modifier un document", "ouesco" ),
		"new_item" => __( "Nouveau document", "ouesco" ),
		"view_item" => __( "Voir le document", "ouesco" ),
		"view_items" => __( "Voir les documents", "ouesco" ),
		"search_items" => __( "Rechercher un document", "ouesco" ),
		"not_found" => __( "Aucun document trouvé", "ouesco" ),
		"not_found_in_trash" => __( "Aucun document trouvé dans la corbeille", "ouesco" ),
		"featured_image" => __( "Image à la une document", "ouesco" ),
		"set_featured_image" => __( "Modifier image à la une", "ouesco" ),
		"remove_featured_image" => __( "Supprimer", "ouesco" ),
		"use_featured_image" => __( "Utiliser", "ouesco" ),
		"items_list" => __( "Liste des documents", "ouesco" ),
	);

	$args = array(
		"label" => __( "documents officiels", "ouesco" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => "docs",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "fond_documentaire", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail", "custom-fields" ),
	);

	register_post_type( "fond_documentaire", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

