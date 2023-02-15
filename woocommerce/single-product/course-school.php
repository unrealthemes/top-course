<?php 
global $product;

$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$show_organization = get_field('show_organization');
$title_organization = get_field('title_organization');
$img_id = get_field('img_school', $school);
$img_url = wp_get_attachment_image_url( $img_id, 'full' ); 
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;

if ( $show_organization ) : 
?>

    <?php if ( $title_organization ) : ?>
        <h4><?php echo esc_html($title_organization); ?></h4>
    <?php endif; ?>

    <div class="moretext white_block">  
        <div class="row_di review_title">
            <div class="review_l">
                <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($school->name); ?>" >
            </div>
            <div class="review_r">
                <div class="review_name"><?php echo esc_html($school->name); ?></div>
                <div class="review_rating">
                    
                    <div class="rating">                                
                        <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                            </symbol>
                        </svg>                                             
                        <div class="c-rate">
                            <svg class="c-icon diactive" width="20" height="20">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="c-icon diactive" width="20" height="20">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="c-icon " width="20" height="20">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="c-icon " width="20" height="20">
                                <use xlink:href="#star"></use>
                            </svg>
                            <svg class="c-icon " width="20" height="20">
                                <use xlink:href="#star"></use>
                            </svg>
                        </div>   
                    </div>
                    
                    <div class="cat_coment">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> 
                        <span>12 отзывов о школе</span>
                    </div>
                </div> 
            </div> 
        </div>        

        <div class="text_hide short-text">
            <?php echo esc_html($school->description); ?>
        </div>
        <div class="di-read-more">
            <input type="button" value="Читать подробнее">
        </div> 
        
    </div>

<?php endif; ?>  