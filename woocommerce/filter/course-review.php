<?php 
$title = get_field('title_rc_filter', 'option');
$txt_btn = get_field('txt_btn_rc_filter', 'option');
$link_btn = get_field('link_btn_rc_filter', 'option');
?>

<div class="di_review">
    
    <?php if ($title) : ?>
        <h3><?php echo esc_html($title); ?></h3> 
    <?php endif; ?>

    <?php if ( have_rows('reviews_rc_filter', 'option') ): ?>

        <div class="row_di carousel_v2 rating_schol_carusel"> 
            <div class="di_review_list owl-carousel owl-theme gallery"> 
        
                <?php 
                while ( have_rows('reviews_rc_filter', 'option') ): the_row(); 
                    $full_name = get_sub_field('fullname_reviews_rc_filter'); 
                    $rating = get_sub_field('rating_reviews_rc_filter'); 
                    $date = get_sub_field('date_reviews_rc_filter'); 
                    $content = get_sub_field('content_reviews_rc_filter'); 
                    $first_letter = strtoupper(mb_substr($full_name, 0, 1));
                ?>

                    <div class="item">
                        <div class="item_block_white">
                        
                            <div class="row_di review_title">
                                <div class="review_l">
                                    <?php echo esc_html($first_letter); ?>
                                </div>
                                <div class="review_r">
                                    
                                    <?php if ($full_name) : ?>
                                        <div class="review_name">
                                            <?php echo esc_html($full_name); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="review_rating">
                                    
                                        <div class="rating">                                
                                            <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                            </symbol>
                                            </svg>                                             
                                            <div class="c-rate">
                                                
                                                <?php 
                                                for ($i = 1; $i <= 5; $i++) : 
                                                    $class = ( $i <= $rating ) ? ' diactive' : '';
                                                ?>
                                                    <svg class="c-icon<?php echo esc_attr($class); ?>" width="20" height="20">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                <?php endfor; ?>

                                            </div>   
                                        </div>
                                        
                                        <?php if ($date) : ?>
                                            <div class="review_date">
                                                <?php echo esc_html($date); ?>
                                            </div>
                                        <?php endif; ?>

                                    </div> 
                                </div>
                            </div>
                            <div class="review_desk">
                                
                                <?php if ($content) : ?>
                                    <div class="review_desk_text">
                                        <?php echo nl2br($content); ?>
                                    </div>
                                <?php endif; ?>

                            </div> 
                        </div> 
                    </div>
    
                <?php endwhile; ?>
        
            </div> 
            <div class="owl_navigation"></div>   
        </div> 

    <?php endif; ?>    
    
    <?php if ($txt_btn) : ?>
        <div class="home_more">
            <a href="<?php echo esc_url($link_btn); ?>" class="btn_white">
                <?php echo esc_html($txt_btn); ?>
            </a>
        </div> 
    <?php endif; ?>
                         
</div>