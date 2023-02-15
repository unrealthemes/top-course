<?php 
global $product;

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
// $img_id = get_field('img_school', $school);
$link = get_field('link_school', $school);
?>

<!-- page_sidebar -->
<div class="col_1_40_di curs_page_sidebar pk_vizible">
    <!-- brand -->
    <div class="brand">
        <div class="brand_img">
            <a href="<?php echo esc_url($link); ?>" target="_blank">
                <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </a>
        </div>
        <div class="brand_title">
            <a href="<?php echo esc_url($link); ?>" target="_blank">
                <?php echo esc_html($school->name); ?>
            </a>
        </div> 
        <div class="brand_a">
            <a href="<?php echo esc_url($link); ?>" target="_blank" class="btn">На сайт курса</a>
            <a href="#" class="btn_white">Оставить отзыв</a>
        </div>
    </div>
    <!-- end brand -->
        
    <?php get_template_part('woocommerce/single-product/course', 'share', ['link' => $link]); ?>
    
</div>
<!-- end page_sidebar --> 