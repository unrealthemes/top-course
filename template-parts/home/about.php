<?php

/**
 * about Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'about-' . $block['id'];
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

$title = get_field('title_about');
$subtitle = get_field('subtitle_about');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/about.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di">  
            <div class="top_curs">
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 

                <?php if ( have_rows('blocks_about') ): ?>
                    <div class="row_di"> 
                        <div class="row_10_di">
                            
                            <?php 
                            while ( have_rows('blocks_about') ): the_row(); 
                                $title = get_sub_field('title_blocks_about');
                                $short_desc = get_sub_field('short_desc_blocks_about');
                                $img_url = get_sub_field('img_blocks_about');
                                $txt_link = get_sub_field('txt_link_blocks_about');  
                                $link = get_sub_field('link_blocks_about');  
                            ?>
                                <div class="col_3_di">
                                    <div class="top_curs_item item_block_white">

                                        <?php if ($title) : ?>
                                            <div class="div top_curs_item_title">
                                                <a href="<?php echo esc_url($link); ?>">
                                                    <?php echo esc_html($title); ?>
                                                </a>
                                            </div> 
                                        <?php endif; ?>

                                        <?php if ($short_desc) : ?>
                                            <div class="div top_curs_item_desk">
                                                <?php echo esc_html($short_desc); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($txt_link) : ?>
                                            <div class="div top_curs_item_btn">
                                                <a class="btn" href="<?php echo esc_url($link); ?>">
                                                    <?php echo esc_html($txt_link); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($img_url) : ?>
                                            <div class="div top_curs_item_img">
                                                <img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_html($title); ?>">
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>
                    </div> 
                <?php endif; ?>

            </div> 
        </div>
    </div> 

<?php endif; ?>