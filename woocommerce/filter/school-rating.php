<?php 
$title = get_field('title_sr_filter', 'option');
$schools = get_field('schools_sr_filter', 'option');
?>

<div class="rating_schol">

    <?php if ($title) : ?>
        <h3><?php echo esc_html($title); ?></h3> 
    <?php endif; ?>
    
    <?php if ($schools) : ?>
        <div class="row_di carousel_v2 rating_schol_carusel"> 
            <div class="rating_schol_list owl-carousel owl-theme gallery"> 

                <?php 
                foreach ($schools as $key => $school) : 
                    $count = $key + 1;
                    $link = get_term_link( (int)$school->term_id, $school->taxonomy );
                ?>

                    <?php if ($count == 1 || $count % 6 == 0) : ?>
                    <ul>
                    <?php endif; ?>


                        <li>
                            <div class="carousel_item">
                                <div class="carousel_item_title title_a">
                                    <a href="<?php echo esc_url($link); ?>">
                                        <?php echo $count . '. ' . esc_html($school->name); ?>
                                    </a>
                                </div>
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
                                            <svg class="c-icon diactive" width="20" height="20">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg class="c-icon diactive" width="20" height="20">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                            <svg class="c-icon " width="20" height="20">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </div>
                                        <span>4.0</span>   
                                    </div>
                                </div>
                            </div>
                        </li>

                    <?php if ($count == 5 || $count % 5 == 0) : ?>
                    </ul>
                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
            <div class="owl_navigation"></div>
        </div> 
    <?php endif; ?>
    
</div>