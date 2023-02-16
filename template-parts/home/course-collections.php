<?php
global $post;
/**
 * course-collections Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'course-collections-' . $block['id'];
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

$title = get_field('title_course_collections');
$subtitle = get_field('subtitle_course_collections');
$txt_btn = get_field('txt_btn_course_collections');
$link_btn = get_field('link_btn_course_collections');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/course-collections.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di">  
            <div class="home_potborka">
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 
                
                <?php if ( have_rows('cc') ): ?>
                    <div class="row"> 
                        <div class="owl_home_potborka owl-carousel owl-theme gallery">
                            
                            <?php 
                            while ( have_rows('cc') ): the_row(); 
                                $title_c = get_sub_field('title_cc');
                                $courses = get_sub_field('courses_cc');  
                            ?>
                                <div class="item">
                                    <div class="home_potborka_item">

                                        <?php echo ut_help()->home->get_categories_collection($courses); ?>

                                        <?php if ($title_c) : ?>
                                            <div class="home_potborka_desk"><?php echo esc_html($title_c); ?></div>
                                        <?php endif; ?>
        
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