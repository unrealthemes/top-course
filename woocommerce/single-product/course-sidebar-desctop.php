<?php 
global $product;

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$course_link = get_field('link_course');
$school_img_id = get_field('img_school', $school);
$school_img_url = wp_get_attachment_url( $school_img_id ); 
?>

<div class="col_1_40_di curs_page_sidebar pk_vizible">
    <div class="brand">

        <div class="brand_img">
            <a href="<?php echo esc_url($course_link); ?>" target="_blank">
                <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </a>
        </div>

        <div class="brand_title">
            
            <?php if ( $schools ) : ?>

                <?php 
                foreach ( $schools as $_school ) : 
                    $_school_img_id = get_field('img_school', $_school);
                    $_school_img_url = wp_get_attachment_image_url( $_school_img_id, 'full' ); 
                    $_school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $_school->slug . '#reviews';
                    if (! $school_img_url) continue;
                ?>
                    <a href="<?php echo esc_url($_school_link); ?>">
                        <img src="<?php echo esc_attr($_school_img_url); ?>" <?php echo esc_attr($_school->name); ?> >
                    </a>
                <?php endforeach; ?>

            <?php endif; ?>

        </div> 

        <div class="brand_a">

            <?php if ($course_link) : ?>
                <a href="<?php echo esc_url($course_link); ?>" target="_blank" class="btn">
                    На сайт курса
                </a>
            <?php endif; ?>

            <?php if ($school) : ?>
                <a data-fancybox data-src="#add_school_review" href="javascript:;" class="btn_white" data-school-id="<?php echo $school->term_id; ?>">
                    Оставить отзыв
                </a>
            <?php endif; ?>
            
        </div>
    </div>
        
    <?php get_template_part('woocommerce/single-product/course', 'share', ['link' => get_permalink( $product->get_id() )]); ?>
    
</div>