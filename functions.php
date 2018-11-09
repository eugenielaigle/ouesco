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

	wp_register_style('normalize-style', get_template_directory_uri().'/assets/js/scrollmagic/css/normalize.css', array());

	wp_register_style('css-style', get_template_directory_uri().'/assets/js/scrollmagic/css/style.css', array());


	wp_enqueue_script( 'ouesco-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.7', true );

	wp_enqueue_script( 'jq-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/lib/jquery.min.js', array(), true );

	wp_enqueue_script( 'highlight-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/lib/highlight.pack.js', array('jquery'), '1', true );

	wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/lib/modernizr.custom.min.js', array('jquery'), '1', true );

	wp_enqueue_script( 'example-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/examples.js', array('jquery'), '1', true );


	wp_enqueue_script( 'tween-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/lib/greensock/TweenMax.min.js', array('jquery'), '1', true );


	wp_enqueue_script( 'scroll-script', get_template_directory_uri() . '/assets/js/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js', array('jquery'), '1', true );

	wp_enqueue_script( 'gsap-script', get_template_directory_uri() . '/assets/js/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js', array('jquery'), '1', true );

	// wp_enqueue_script( 'debug-script', get_template_directory_uri() . '/assets/js/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js', array('jquery'), '1', true );

		wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/js/slick/slick/slick.min.js', array( 'jquery' ), '1.6.0', true );
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri(). '/assets/js/slick.js', array( 'slickjs' ), '1.6.0', true );
	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/assets/js/slick/slick/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/assets/js/slick/slick/slick-theme.css', '1.6.0', 'all');





	wp_enqueue_script( 'tracking-script', get_template_directory_uri() . '/assets/js/scrollmagic/js/tracking.js', array('jquery'), '1', false );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true );

	if(is_page(236)){
		wp_enqueue_script( 'actions', get_template_directory_uri() . '/assets/js/actions.js', array('jquery'), '1.0', true );
	}

	if(is_page(12)){
		wp_enqueue_script( 'sage', get_template_directory_uri() . '/assets/js/sage.js', array('jquery'), '1.0', true );
	}

	if(is_page(91)){
		wp_enqueue_script( 'qualite', get_template_directory_uri() . '/assets/js/qualite.js', array('jquery'), '1.0', true );
	}

	if(is_page(8)){
		wp_enqueue_script( 'territoire', get_template_directory_uri() . '/assets/js/territoire.js', array('jquery'), '1.0', true );
	}

	if( is_post_type_archive('documentsofficiels') ){
		wp_enqueue_script( 'documentation', get_template_directory_uri() . '/assets/js/documentation.js', array('jquery'), '1.0', true );
	}

		if(is_front_page()){
		wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), '1.0', true );
	}

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


// CUSTOM POSTS
	function cptui_register_my_cpts() {

	/**
	 * Post Type: documentation.
	 */

	$labels = array(
		"name" => __( "documentation", "ouesco" ),
		"singular_name" => __( "documentation", "ouesco" ),
		"menu_name" => __( "Documentation", "ouesco" ),
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
		"label" => __( "documentation", "ouesco" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => "documentsofficiels",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "documentsofficiels", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail" ),
		"taxonomies" => array( "categories_documentation" ),
	);

	register_post_type( "documentsofficiels", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


// CUSTOM TAXONOMIES
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: categories.
	 */

	$labels = array(
		"name" => __( "categories", "ouesco" ),
		"singular_name" => __( "categorie", "ouesco" ),
		"menu_name" => __( "Catégories", "ouesco" ),
		"all_items" => __( "Toutes les catégories", "ouesco" ),
		"edit_item" => __( "Modifier une catégorie", "ouesco" ),
		"view_item" => __( "Voir la catégorie", "ouesco" ),
		"update_item" => __( "Modifier", "ouesco" ),
		"add_new_item" => __( "Ajouter nouvelle catégorie", "ouesco" ),
		"new_item_name" => __( "Nouveau", "ouesco" ),
		"parent_item" => __( "Catégorie parent", "ouesco" ),
		"parent_item_colon" => __( "Catégorie parent", "ouesco" ),
		"search_items" => __( "Rechercher une catégorie", "ouesco" ),
		"separate_items_with_commas" => __( "séparer les catégories par des virgules", "ouesco" ),
		"not_found" => __( "Aucune catégorie trouvée", "ouesco" ),
		"no_terms" => __( "Pas de catégorie", "ouesco" ),
		"items_list" => __( "Liste des catégories", "ouesco" ),
	);

	$args = array(
		"label" => __( "categories", "ouesco" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'categories_documentation', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "categories_documentation",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "categories_documentation", array( "documentsofficiels" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );


/**
 * Ajouter une colonne de catégorie
 */
function jst_manage_cpt_posts_columns( $cols )
{
	// Récupération du type de post courant et des taxonomies liées au CPT
	$post_type = get_current_screen()->post_type;
	$taxonomies = get_object_taxonomies( $post_type );
	foreach( $taxonomies as $tax_id )
	{
		// Récupération de l’objet WP_Taxonomy
		$tax = get_taxonomy( $tax_id );
		// Ajout d’une colonne par définition de l’ attribut id de son en-tête
		$cols[ 'taxonomy-' . $tax_id ] = $tax->label;
	}
	return $cols;
}


