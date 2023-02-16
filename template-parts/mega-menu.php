<?php 
$categories = get_terms( 
    'product_cat', [
        'orderby' => 'name',
        'order' => 'ASC',
        'parent' => 0,
        'hide_empty' => 0,
    ] 
); 
?>

<?php if ( $categories ) : ?>

    <nav class="cd-dropdown">  
        <a href="#0" class="cd-close">Close</a>
        <ul class="cd-dropdown-content">

            <?php 
            foreach ( $categories as $key => $category ) : 
                $link = get_term_link( (int)$category->term_id, $category->taxonomy );
                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                $image = wp_get_attachment_url( $thumbnail_id ); 
                $child_categories = get_terms( 
                    [
                        'taxonomy' => $category->taxonomy, 
                        'hide_empty' => 0,
                        'child_of' => $category->term_id,
                    ]
                );
            ?>

                <li class="has-children">
                    <a href="<?php echo esc_url($link); ?>">

                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        <?php endif; ?>

                        <span><?php echo esc_html($category->name); ?></span>
                    </a> 

                    <?php if ( $child_categories ) : ?>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Назад</a></li>

                            <?php 
                            foreach ( $child_categories as $key => $child_category ) : 
                                $child_link = get_term_link( (int)$category->term_id, $category->taxonomy );
                            ?>

                                <li>
                                    <a href="<?php echo esc_url($child_link); ?>">
                                        <?php echo esc_html($child_category->name); ?>
                                    </a>
                                </li>

                            <?php endforeach; ?>
                            
                            <div class="clear"></div>
                            <!-- <div class="menu_btand">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r1.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r2.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r3.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r4.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r1.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r2.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r3.svg" alt=""></a>
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r4.svg" alt=""></a> 
                            </div>  -->
                            
                        </ul>
                    <?php endif; ?>

                </li>

            <?php endforeach; ?>
                        
        </ul> 
    </nav> 

<?php endif; ?>