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

  // public $product;

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

  	// $this->product = UT_Product::get_instance();
  }

  /**
   * Register all needed hooks
   */
  public function register_hooks() {

  	add_action( 'wp_enqueue_scripts', [ $this, 'load_scripts_n_styles' ] );
  	add_action( 'after_setup_theme',  [ $this, 'register_menus' ] );
  	add_action( 'after_setup_theme',  [ $this, 'add_theme_support' ] );
  }

  function register_menus() {

  	register_nav_menus( [
  	  'menu_1' => esc_html__( 'Header', 'unreal-theme' ),
  	  'menu_2' => esc_html__( 'Footer', 'unreal-theme' ),
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

  function load_scripts_n_styles() {
  	// ========================================= CSS ========================================= //
  	// wp_enqueue_style( 'ut-style', get_stylesheet_uri() );
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
  	wp_enqueue_script( 'ut-modernizr', THEME_URI . '/js/modernizr.js', array('jquery'), date("Ymd"), false );
  	wp_enqueue_script( 'ut-jquery-ui', THEME_URI . '/js/jquery-ui.js', array('jquery'), date("Ymd"), true );
  	wp_enqueue_script( 'ut-owl-carousel', THEME_URI . '/js/owl.carousel.min.js', array('jquery'), date("Ymd"), true );
  	wp_enqueue_script( 'ut-jquery-menu-aim', THEME_URI . '/js/jquery.menu-aim.js', array('jquery'), date("Ymd"), true );
  	wp_enqueue_script( 'ut-main', THEME_URI . '/js/main.js', array('jquery'), date("Ymd"), true );
  	wp_enqueue_script( 'ut-custom', THEME_URI . '/js/custom.js', array('jquery'), date("Ymd"), true );

  	// wp_enqueue_script( 'ut-scripts', THEME_URI . '/scripts/scripts.js', array('jquery'), date("Ymd"), true );
  	// wp_localize_script( 'ut-scripts', 'ut_params', [
  	//   'ajaxurl'    => admin_url( 'admin-ajax.php' ),
  	//   'ajax_nonce' => wp_create_nonce('ut_check'),
  	// ] );

  	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  	  wp_enqueue_script( 'comment-reply' );
  	}

  }

  public function import() {

  	include_once 'helpers.php';

  }

}
