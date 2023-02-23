<?php

/**
 * schools Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'schools-' . $block['id'];
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

$title = get_field('title_schools');
$subtitle = get_field('subtitle_schools');
$schools = get_field('schools');
$txt_btn = get_field('txt_btn_schools');
$link_btn = get_field('link_btn_schools');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/schools.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?> 

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di"> 
            <div class="main_rating"> 
                <div class="block_title">

                    <?php if ($title) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 
                
                <?php if ($schools) : ?>
                    <div class="row_di">
                        <div class="row_10_di">

                            <?php 
                            foreach ($schools as $school) : 
                                $school_img_id = get_field('img_school', $school);

                                if ( ! $school_img_id ) continue;

                                $school_img_url = wp_get_attachment_url( $school_img_id ); 
                                $link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $school->slug;
                            ?>
                                <div class="col_5_di">
                                    <a href="<?php echo esc_url($link); ?>">
                                        <img src="<?php echo esc_attr($school_img_url); ?>" alt="<?php echo esc_attr($school->name); ?>">
                                    </a>                       
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($txt_btn) : ?>
                    <div class="home_more">
                        <a href="<?php echo esc_url($link_btn); ?>" class="btn">
                            <?php echo esc_html($txt_btn); ?>
                        </a>
                    </div>  
                <?php endif; ?>

            </div> 
        </div>
    </div> 

<?php endif; ?>