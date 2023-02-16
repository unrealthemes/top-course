<?php

/**
 * courses Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'courses-' . $block['id'];
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

$title = get_field('title_courses');
$subtitle = get_field('subtitle_courses');
$terms = get_field('courses');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/courses.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di">  
            <div class="top_list">
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 
                
                <?php if ($terms) : ?>
                    <div class="row"> 
                        <div class="owl_top_list owl-carousel owl-theme gallery">
                        
                            <?php 
                            foreach ($terms as $term) : 
                                $link = get_term_link( (int)$term->term_id, $term->taxonomy );
                                $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true ); 
                                $image = wp_get_attachment_url( $thumbnail_id ); 
                                $child_terms = get_terms( 
                                    [
                                        'taxonomy' => $term->taxonomy, 
                                        'hide_empty' => 0,
                                        'child_of' => $term->term_id,
                                    ]
                                );
                            ?>
                                <div class="item">
                                    <div class="top_list_item">
                                        <div class="item_title">
                                            <div class="item_title_icon">
                                                
                                                <?php if ( $image ) : ?>
                                                    <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($term->name); ?>">
                                                <?php endif; ?>

                                            </div>
                                            <div class="item_title_title"><?php echo esc_html($term->name); ?></div>
                                        </div>
                                        
                                        <?php echo ut_help()->home->get_short_desc_via_child_terms($child_terms, $link); ?>

                                    </div> 
                                </div>
                            <?php endforeach; ?>
            
                        </div>
                        <div class="navigation"></div>
                    </div>
                <?php endif; ?>
                        
            </div> 
        </div>
    </div> 

<?php endif; ?>