<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

// if ( $rating_count > 0 ) : 
?>

    <div class="rating_curse">
        <h4>Рейтинг курса</h4>
        <div class="rating_curse_title">
            <div class="ui-rating-leaves">
                <svg class="ui-rating-leaves__icon" width="80" height="35" viewBox="0 0 80 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58 30C58 31.0609 58.2107 32.0783 58.5858 32.8284L63.3999 28.4191L58 30Z" fill="#4967D0"></path>
                    <path d="M58.5858 32.8284C58.9609 33.5786 59.4696 34 60 34L79 34L71 20L79 6L60 6C59.4696 6 58.9609 6.42143 58.5858 7.17157C58.2107 7.92172 58 8.93913 58 10L58 30M58.5858 32.8284C58.2107 32.0783 58 31.0609 58 30M58.5858 32.8284L63.3999 28.4191L58 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M22 30C22 31.0609 21.7893 32.0783 21.4142 32.8284L16.6001 28.4191L22 30Z" fill="#4967D0"></path>
                    <path d="M21.4142 32.8284C21.0391 33.5786 20.5304 34 20 34L0.999998 34L9 20L0.999999 6L20 6C20.5304 6 21.0391 6.42143 21.4142 7.17157C21.7893 7.92172 22 8.93913 22 10L22 30M21.4142 32.8284C21.7893 32.0783 22 31.0609 22 30M21.4142 32.8284L16.6001 28.4191L22 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <rect x="16" y="1" width="48" height="28" rx="2" fill="#F8F8F8" stroke="#4967D0" stroke-width="2"></rect>
                </svg> 
                <div class="ui-rating-leaves__counter">
                    <?php echo esc_html($average); ?>
                </div> 
            </div>
        
            <div class="rating">                                
                <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                    </symbol>
                </svg>                                             
                <div class="c-rate">
                    
                    <?php 
                    for ($y = 1; $y <= 5; $y++) : 
                        $class = ( $y <= round($average) ) ? ' diactive' : '';
                    ?>
                        <svg class="c-icon<?php echo esc_attr($class); ?>" width="20" height="20">
                            <use xlink:href="#star"></use>
                        </svg>
                    <?php endfor; ?>

                </div>  
            </div>
        </div>

        <div class="ui-rating-group">
            
            <?php 
            for ($i = 5; $i <= 5 && $i > 0; $i--) : 
                $rating_count_item = $product->get_rating_count($i);
                $average_item = $product->get_average_rating($i);
                $review_count_item = $product->get_review_count($i);
                $percent = ($rating_count) ? $rating_count_item / $rating_count * 100 : 0;
            ?>
        
                <div class="rating_curse_star">
                    <div class="rating">                                
                        <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                            </symbol>
                        </svg>                                             
                        <div class="c-rate">
                            
                            <?php 
                            for ($j = 1; $j <= 5; $j++) : 
                                $class_item = ( $i >= $j ) ? ' diactive' : '';
                            ?>
                                <svg class="c-icon<?php echo esc_attr($class_item); ?>" width="20" height="20">
                                    <use xlink:href="#star"></use>
                                </svg>
                            <?php endfor; ?>

                        </div>  
                    </div>
                    
                    <div class="ui-progress-bar ui-rating-item__progress">
                        <div class="ui-progress-bar__inner" style="width:<?php echo esc_attr($percent); ?>%;"></div>
                    </div>
                    
                    <div class="ui-chip ui-rating-item__chip">
                        <div class="ui-chip__value" data-v-42e56569=""><?php echo esc_html($rating_count_item); ?></div>
                    </div>
                </div>
  
            <?php endfor; ?>
            
            <a data-fancybox data-src="#add_review" href="javascript:;" class="btn">
                Оставить отзыв
            </a>

        </div>  
    </div>

<?php //endif; ?>