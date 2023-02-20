<?php

class UT_Course_Filter {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_filter( 'woocommerce_catalog_orderby', [$this, 'rename_sorting_option_woocommerce_shop'] );
        // add_filter( 'pre_get_posts', [$this, 'per_page'] );

        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

        add_action( 'woo_catalog_ordering', 'woocommerce_catalog_ordering', 10, 1 );
    }

    
    public function rename_sorting_option_woocommerce_shop( $options ) {
        unset($options['menu_order']);
        return $options;
    }

    // function per_page( $query ) {
        
    //     if ( !is_admin() && $query->is_main_query() && $query->get('s') ) {
    //         $query->set('s', $query->get('s'));
    //     }
    // }

} 