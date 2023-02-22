<?php

/**
 * reviews Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'reviews-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container_di home_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title_reviews');
$subtitle = get_field('subtitle_reviews');
$txt_btn = get_field('txt_btn_reviews');
$link_btn = get_field('link_btn_reviews');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/reviews.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di"> 
            <div class="main_reviews"> 
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 

                <?php if ( have_rows('reviews') ): ?>
                
                    <div class="row"> 
                        <div class="main_reviews_list owl-carousel owl-theme gallery">

                            <?php 
                            while ( have_rows('reviews') ): the_row(); 
                                $full_name = get_sub_field('fullname_reviews'); 
                                $rating = get_sub_field('rating_reviews'); 
                                $date = get_sub_field('date_reviews'); 
                                $content = get_sub_field('content_reviews'); 
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
                                            
                                            <!-- <a href="#" class="option">
                                                <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
                                                    <circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
                                                    <circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
                                                </svg> 
                                            </a>  -->
                                        </div>
                                        
                                        <div class="review_desk">
                                            <!-- <div class="review_desk_title">Профессиональное обучение, в котором чувствуется любовь к делу</div> -->

                                            <?php if ($content) : ?>
                                                <div class="review_desk_text">
                                                    <?php echo nl2br($content); ?>
                                                </div>
                                            <?php endif; ?>

                                        </div> 
                                        
                                        <!-- <div class="review_niz">
                                            <div class="review_niz_kto">
                                                <a href="#">
                                                    <img src="<?php // echo THEME_URI; ?>/img/otz.svg" alt="" >
                                                </a>
                                            </div> 
                                            <div class="review_niz_kto_a">
                                                <a href="#">Источник</a>
                                            </div> 
                                        
                                            <div class="quantity_inner">        
                                                <button class="bt_plus">
                                                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
                                                    </svg> 
                                                </button>
                                                <input type="text" class="quantity" value="0">
                                                <button class="bt_minus">
                                                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
                                                    </svg> 
                                                </button>
                                            </div>
                                            
                                        </div>     -->
                                        
                                    </div> 
                                </div>

                            <?php endwhile; ?>
                    
                        </div>
                        <div class="navigation"></div>
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
        </div>
    </div>

<?php endif; ?>