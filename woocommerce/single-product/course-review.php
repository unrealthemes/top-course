<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}

$args = [
    'status' => 'approve',
    'post_type' => 'product', 
    'post_id' => $product->get_id()
];
$comments = get_comments($args);
?>

<div class="otziv">
    <h4>Отзывы о курсе</h4>
    
    <form>
        <div class="filter_search">
            <input placeholder="Поиск по отзывам" class="l-filter__search full-width">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z" stroke="#B8B9BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg> 
        </div>
    </form>
    
    <div class="produkt_short">
        <a href="#" class="active"><span>по рейтингу</span> 
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.22217 2.55566H15" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M7.22217 5.66675H12.6666" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M7.22217 8.77783H10.3333" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1 11.8892L3.33334 14.2225L5.66668 11.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M3.3335 12.6667V1.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>  
        </a> 
        <a href="#">по дате</a> 
    </div>

    <?php if ( $comments ) : ?>
    
        <div class="row_di">

            <?php foreach ( $comments as $comment ) : ?>

                <?php 
                get_template_part(
                    'woocommerce/single-product/course-review', 
                    'item', 
                    [
                        'comment' => $comment
                    ]
                ); 
                ?>

            <?php endforeach; ?>
            
            <div class="home_more">
                <a href="#" class="btn_white">
                    Показать все отзывы
                </a>
            </div> 

        </div> 

    <?php else : ?>

        <p class="woocommerce-noreviews">
            <?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?>
        </p>
        
    <?php endif; ?>
    
</div>