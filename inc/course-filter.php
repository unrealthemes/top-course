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
        add_filter('woocommerce_default_catalog_orderby', [$this, 'custom_default_catalog_orderby'] );
    }

    

    function custom_default_catalog_orderby() {
        return 'date'; // Can also use title and price
    }
    
    public function rename_sorting_option_woocommerce_shop( $options ) {

        $options = [
            'date' => 'По новизне',
            'popularity' => 'По популярности',
            'rating' => 'По рейтингу',
            'price' => 'Цены: по возрастанию',
            'price-desc' => 'Цены: по убыванию',
        ];

        return $options;
    }

    // function per_page( $query ) {
        
        // if ( !is_admin() && $query->is_main_query() && $query->get('s') ) {
        //     $query->set('s', $query->get('s'));
        // }

        // if ( ! is_admin() && is_post_type_archive( 'product' ) && $query->is_main_query() ) {
        //     $query->set('orderby', 'meta_value');
        //     $query->set('meta_type', 'DATE');
        //     $query->set('meta_key', 'startdate2');
        //     $query->set('order', 'ASC');
        // }

    // }

} 