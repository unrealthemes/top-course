<?php 
global $product;

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$link = get_field('link_school', $school);
$school_img_id = get_field('img_school', $school);
$school_img_url = wp_get_attachment_url( $school_img_id ); 
?>

<div class="col_1_40_di curs_page_sidebar pk_vizible">
    <div class="brand">

        <div class="brand_img">
            <a href="<?php echo esc_url($link); ?>" target="_blank">
                <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </a>
        </div>

        <div class="brand_title">
            <!-- <a href="<?php // echo esc_url($link); ?>" target="_blank">
                <?php // echo esc_html($school->name); ?>
            </a> -->
            <a href="<?php echo ut_get_permalik_by_template('template-school.php') . '?slug=' . $school->slug; ?>">
                <img src="<?php echo $school_img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </a>
        </div> 

        <div class="brand_a">
            <a href="<?php echo esc_url($link); ?>" target="_blank" class="btn">На сайт курса</a>

            <?php if ($school) : ?>
                <a data-fancybox data-src="#add_school_review" href="javascript:;" class="btn_white" data-school-id="<?php echo $school->term_id; ?>">
                    Оставить отзыв
                </a>
            <?php endif; ?>
            
        </div>
    </div>
        
    <?php get_template_part('woocommerce/single-product/course', 'share', ['link' => get_permalink( $product->get_id() )]); ?>
    
</div>