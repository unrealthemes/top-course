<?php 
$comment = $args['comment'];
$rating = get_comment_meta($comment->comment_ID, 'rating', true);
$count = get_comment_meta($comment->comment_ID, 'vote', true);
$count = ( $count == '' ) ? 0 : $count;
$disabled = ( isset($_COOKIE["vote-comment-" . $comment->comment_ID]) ) ? 'disabled' : '';
$first_letter = strtoupper(mb_substr($comment->comment_author, 0, 1));
?>

<div id="comment-<?php echo esc_attr($comment->comment_ID); ?>" class="item">
    <div class="item_block_white">
    
        <div class="row_di review_title">
            <div class="review_l">
                <?php echo esc_html($first_letter); ?>
            </div>
            <div class="review_r">
                <div class="review_name"><?php echo esc_html($comment->comment_author); ?></div>
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
                                $class_item = ( $rating >= $i ) ? ' diactive' : '';
                            ?>
                                <svg class="c-icon<?php echo esc_attr($class_item); ?>" width="20" height="20">
                                    <use xlink:href="#star"></use>
                                </svg>
                            <?php endfor; ?>

                        </div>   
                    </div>
                    
                    <div class="review_date"><?php echo get_comment_date('', $comment); ?></div> 
                </div> 
            </div>
            
            <!-- <a href="#" class="option">
                <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="18" cy="2" r="2" fill="#B8B9BA"></circle>
                <circle cx="10" cy="2" r="2" fill="#B8B9BA"></circle>
                <circle cx="2" cy="2" r="2" fill="#B8B9BA"></circle>
                </svg> 
            </a>  -->
        </div>
        
        <div class="review_desk">
            <div class="review_desk_text">
                <?php echo nl2br($comment->comment_content); ?>
            </div>
        </div> 
        
        <div class="review_niz">
            <!-- <div class="review_niz_kto"><a href="#"><img src="<?php // echo THEME_URI; ?>/img/otz.svg" alt=""></a> </div> 
            <div class="review_niz_kto_a"><a href="#">Источник</a></div>  -->
            
            <div class="quantity_inner">        
                <button class="bt_plus" data-id="<?php comment_ID(); ?>" <?php echo $disabled; ?>>
                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"></path>
                    </svg> 
                </button>
                <input type="text" class="quantity" value="<?php echo esc_attr($count); ?>">
                <button class="bt_minus" data-id="<?php comment_ID(); ?>" <?php echo $disabled; ?>>
                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"></path>
                    </svg> 
                </button>
            </div>
            
        </div>    
        
    </div> 
</div>