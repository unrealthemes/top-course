<?php

/**
 * Get instance of helper
 */
function ut_help() {
  	return UT_Theme_Helper::get_instance();
}

/**
 * Main class of all tehe,e settings
 */
class UT_Theme_Helper {

	private static $_instance = null;

	public $comments;
	public $breadcrumbs;
	public $home;
	public $course_filter;
	public $school_review;
	public $parser;

	private function __construct() {

	}

	protected function __clone() {

	}

	static public function get_instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Load files, plugins, add hooks and filters and do all magic
	 */
	function init() {

		// load needed files
		$this->import();
		$this->load_classes();
		$this->register_hooks();

		return $this;
	}

	function load_classes() {

		$this->comments = UT_Comments::get_instance();
		$this->breadcrumbs = UT_Breadcrumbs::get_instance();
		$this->home = UT_Home::get_instance();
		$this->course_filter = UT_Course_Filter::get_instance();
		$this->school_review = UT_School_Review::get_instance();
		$this->parser = UT_Parser::get_instance();
	}

	/**
	 * Register all needed hooks
	 */
	public function register_hooks() {

		add_action( 'wp_enqueue_scripts', [ $this, 'load_scripts_n_styles' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'load_admin_scripts_n_styles' ] );
		add_action( 'after_setup_theme',  [ $this, 'register_menus' ] );
		add_action( 'after_setup_theme',  [ $this, 'add_theme_support' ] );
		// add_action( 'widgets_init', [ $this, 'widgets_init' ] );
	}

	function register_menus() {

		register_nav_menus( [
			'header' => esc_html__( 'Header', 'unreal-theme' ),
			'footer_l' => esc_html__( 'Footer (слева)', 'unreal-theme' ),
			'footer_r' => esc_html__( 'Footer (справа)', 'unreal-theme' ),
			'footer_b' => esc_html__( 'Footer (снизу)', 'unreal-theme' ),
		] );
	}

	public function add_theme_support() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		] );
		add_theme_support( 'woocommerce' );
	}

	// public function widgets_init() {
 
	// 	register_sidebar( array(
	// 		'name'          => 'UT Widget Area',
	// 		'id'            => 'ut-widget',
	// 		'before_widget' => '<div class="chw-widget">',
	// 		'after_widget'  => '</div>',
	// 		'before_title'  => '<h2 class="chw-title">',
	// 		'after_title'   => '</h2>',
	// 	) );
	 
	// }
	

  	function load_scripts_n_styles() {
		// ========================================= CSS ========================================= //
		wp_enqueue_style( 'ut', get_stylesheet_uri() );
		// wp_enqueue_style( 'ut-googleapis', 'https://fonts.googleapis.com', [], null );
		// wp_enqueue_style( 'ut-gstatic', 'https://fonts.gstatic.com', [], null );
		wp_enqueue_style( 'ut-googleapis-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', [], null );
		wp_enqueue_style( 'ut-style', THEME_URI . '/css/style.css' );
		wp_enqueue_style( 'ut-owl-carousel', THEME_URI . '/css/owl.carousel.min.css' );
		wp_enqueue_style( 'ut-jquery-ui', THEME_URI . '/css/jquery-ui.css' );
		wp_enqueue_style( 'ut-menu', THEME_URI . '/css/menu.css' );
		wp_enqueue_style( 'ut-responsive', THEME_URI . '/css/responsive.css' );
		// ========================================= JS ========================================= //
		//////////////////////////////////////
		wp_deregister_script('jquery-core');
		wp_register_script('jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', false, null, true);
		wp_deregister_script('jquery');
		wp_register_script('jquery', false, array('jquery-core'), null, true);
		//////////////////////////////////////
		wp_enqueue_script( 'ut-jquery-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), date("Ymd"), false );
		wp_enqueue_script( 'ut-modernizr', THEME_URI . '/js/modernizr.js', array('jquery'), date("Ymd"), false );
		wp_enqueue_script( 'ut-jquery-ui', THEME_URI . '/js/jquery-ui.js', array('jquery'), date("Ymd"), true );
		wp_enqueue_script( 'ut-owl-carousel', THEME_URI . '/js/owl.carousel.min.js', array('jquery'), date("Ymd"), true );
		wp_enqueue_script( 'ut-jquery-menu-aim', THEME_URI . '/js/jquery.menu-aim.js', array('jquery'), date("Ymd"), true );
		wp_enqueue_script( 'ut-main', THEME_URI . '/js/main.js', array('jquery'), date("Ymd"), true );
		// min
		$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
		$query = $_GET;
		$query['rng_min_price'] = 0;
		$query['rng_max_price'] = 0.1;
		$query['zero'] = 1;
		$query_result = http_build_query($query);
		$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0] . '?' . $query_result;
		// max
		unset($query['rng_min_price']);
		unset($query['rng_max_price']);
		unset($query['zero']);
		$query_result = http_build_query($query);
		$full_actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0] . '?' . $query_result;

		wp_localize_script( 'ut-main', 'ut_main', [
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'ajax_nonce' => wp_create_nonce('ut_check'),
			'zero_url' => $actual_link,
			'full_url' => $full_actual_link,
		] );
		wp_enqueue_script( 'ut-custom', THEME_URI . '/js/custom.js', array('jquery'), date("Ymd"), true );

		wp_enqueue_style( 'ut-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_script( 'ut-comments', THEME_URI . '/js/comments.js', array('jquery'), date("Ymd"), true );
		wp_localize_script( 'ut-comments', 'ut_params', [
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'ajax_nonce' => wp_create_nonce('ut_check'),
		] );

		if ( is_singular() ) {
			wp_enqueue_style( 'ut-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', [], null );
			wp_enqueue_script( 'ut-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), date("Ymd"), false );
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

  	}

	public function load_admin_scripts_n_styles() {

        wp_enqueue_style( 'admin', THEME_URI . '/admin.css' );
        wp_enqueue_script( 'ut-admin', THEME_URI . '/js/admin.js' );  
        wp_localize_script('ut-admin', 'ut_admin', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'ajax_nonce' => wp_create_nonce('admin_nonce'),
            'theme_uri' => THEME_URI,
        ]);
    }

	public function import() {

  		include_once 'helpers.php';
  		include_once 'class.comments.php';
  		include_once 'class.breadcrumbs.php';
  		include_once 'class.home.php';
  		include_once 'course-filter.php';
  		include_once 'class.school-review.php';
  		include_once 'class.parser.php';
  	}

}