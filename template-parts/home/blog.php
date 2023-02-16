<?php
global $post;
/**
 * blog Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blog-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container_di';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title_blog');
$subtitle = get_field('subtitle_blog');
$articles = get_field('articles');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/blog.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di">  
            <div class="home_blog">
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 

                <?php if ($articles) : ?>
                    <div class="row_di"> 
                        <div class="row_10_di">
                        
                            <?php  
                            foreach ($articles as $article) : 
                                $post = $article;
                                setup_postdata($post);
                            ?>
                                <div class="col_4_di" data-id="<?php echo get_the_ID(); ?>">
                                    <div class="home_blog_item item_block_white">
                                        <div class="div home_blog_item_img">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php 
                                                echo get_the_post_thumbnail( 
                                                    get_the_ID(), 
                                                    'large', 
                                                    []
                                                ); 
                                                ?>
                                            </a>
                                        </div>
                                        <div class="div home_blog_item_title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </div> 
                                        <div class="div home_blog_niz"> 
                                            <?php echo ut_get_the_category_list('  '); ?>
                                            <div class="data"><?php echo get_the_date('d.m.y'); ?></div>
                                        </div> 
                                    </div>
                                </div>
                            <?php 
                            endforeach; 
                            wp_reset_postdata();
                            ?> 

                        </div>
                    </div> 
                <?php endif; ?>

            </div> 
        </div>
    </div> 

<?php endif; ?>