<?php 
$title = get_field('title_rc_filter', 'option');
$txt_btn = get_field('txt_btn_rc_filter', 'option');
$link_btn = get_field('link_btn_rc_filter', 'option');
?>

<div class="di_review">
    
    <?php if ($title) : ?>
        <h3><?php echo esc_html($title); ?></h3> 
    <?php endif; ?>

    <div class="row_di carousel_v2 rating_schol_carusel"> 
        <div class="di_review_list owl-carousel owl-theme gallery"> 
     

            <div class="item">
                <div class="item_block_white">
                
                    <div class="row_di review_title">
                        <div class="review_l">
                            И
                        </div>
                        <div class="review_r">
                            <div class="review_name">Иван Васильевич</div>
                            <div class="review_rating">
                            
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>   
                                </div>
                                
                                <div class="review_date">27.08.2022</div> 
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
                        <!-- <div class="review_desk_title">Профессиональное обучение, в котором чувствуется любовь к делу <3</div> -->
                        <div class="review_desk_text">
                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
                                и были незначительны. 
                            
                        </div>
                    </div> 
                    
                    <div class="review_niz">
                        <!-- <div class="review_niz_kto"><a href="#"><img src="img/otz.svg" alt="" ></a> </div> 
                        <div class="review_niz_kto_a"><a href="#">Источник</a></div>  -->
                
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
            
                    </div>    
                    
                </div> 
            </div>
  
     
        </div> 
        <div class="owl_navigation"></div>   
    </div>     
    
    <?php if ($txt_btn) : ?>
        <div class="home_more">
            <a href="<?php echo esc_url($link_btn); ?>" class="btn_white">
                <?php echo esc_html($txt_btn); ?>
            </a>
        </div> 
    <?php endif; ?>
                         
</div>