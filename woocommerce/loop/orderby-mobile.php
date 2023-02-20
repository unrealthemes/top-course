<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$orderby = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : $default_orderby;
$catalog_orderby_options = apply_filters(
    'woocommerce_catalog_orderby',
    [
        'menu_order' => __( 'Default sorting', 'woocommerce' ),
        'popularity' => __( 'Sort by popularity', 'woocommerce' ),
        'rating'     => __( 'Sort by average rating', 'woocommerce' ),
        'date'       => __( 'Sort by latest', 'woocommerce' ),
        'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
        'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
    ]
);
?>

<div class="mobile_short xs_vizible">
   
    <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
        <?php if ($orderby == $id) : ?>
            <a href="#" class="block_button" onclick="return false">
                <span><?php echo $name; ?></span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.22266 4.55566H17.0005" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.22266 7.6665H14.6671" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.22266 10.7778H12.3338" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 13.8892L5.33334 16.2225L7.66668 13.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.33301 14.6667V3.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L8 6.5L15 1.5" stroke="#4967D0" stroke-width="2"/>
                </svg> 
            </a> 
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="big white_block">
        <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
            <?php if ($orderby != $id) : ?>
                <a data-orderby="<?php echo esc_attr( $id ); ?>">
                    <?php echo $name; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div> 

<a class="sidebar_btn" href="#" onclick="return false"> 
    <span>фильтры</span> 
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.9997 2.6665H9.33301" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M6.66667 2.6665H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14 8H8" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M5.33333 8H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.0003 13.3335H10.667" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8 13.3335H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.33301 1.3335V4.00016" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M5.33301 6.6665V9.33317" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10.667 12V14.6667" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg> 
</a> 