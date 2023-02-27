<?php 
global $product;

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$course_link = get_field('link_course');
$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average = $product->get_average_rating();
$school_img_id = get_field('img_school', $school);
$school_img_url = wp_get_attachment_url( $school_img_id );
?>
 
<div class="curs_page_sidebar mobile_sidebar xs_vizible">
    <div class="brand">
        <div class="brand_img">
            <a href="<?php echo esc_url($course_link); ?>" target="_blank">
                <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </a>
        </div> 
        <div class="page_title">
            <?php the_title('<h2>', '</h2>'); ?>

            <?php if ( $rating_count > 0 ) : ?>
                <div class="curs_page_item">
                    <div class="review_rating">
                        <div class="rating">                                
                            <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                    <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                </symbol>
                            </svg>                                             
                            <div class="c-rate">
                                
                                <?php 
                                for ($i = 1; $i <= 5; $i++) : 
                                    $class = ( $i <= round($average) ) ? ' diactive' : '';
                                ?>
                                    <svg class="c-icon<?php echo esc_attr($class); ?>" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                <?php endfor; ?>

                            </div>
                            <span><?php echo esc_html($average); ?></span> 
                        </div>
                        <div class="cat_coment">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg> 
                            <span>
                                <?php 
                                echo sprintf( 
                                    '%s о курсе', 
                                    ut_num_decline( 
                                        $rating_count, 
                                        [ 
                                            'отзыв', 
                                            'отзывы', 
                                            'отзывов' 
                                        ] 
                                    ) 
                                );
                                ?>
                            </span>
                        </div> 
                    </div>
                </div> 
            <?php endif; ?>

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
                        <img src="<?php echo esc_attr($_school_img_url); ?>" alt="<?php echo esc_attr($_school->name); ?>">
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

            <a data-fancybox data-src="#add_review" href="javascript:;" class="btn_white f-modal" data-school-id="<?php echo $school->term_id; ?>">
                Оставить отзыв
            </a>
        </div>
    </div>
        
    <?php get_template_part('woocommerce/single-product/course', 'share', ['link' => get_permalink( $product->get_id() )]); ?>

</div>