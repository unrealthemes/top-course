<?php
global $post;
/**
 * search Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'search-' . $block['id'];
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

$title = get_field('title_search');
$subtitle = get_field('subtitle_search');
$terms = get_field('terms_search');
$count_teachers = get_field('count_teachers_search');
$counts = ut_help()->home->count_objects();
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>'/img/gutenberg-preview/search.png'" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="row_di"> 
            <div class="main_header"> 
                <div class="block_title">
                    
                    <?php if ($title) : ?>
                        <h1><?php echo esc_html($title); ?></h1>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <div class="h_desc"><?php echo nl2br($subtitle); ?></div>
                    <?php endif; ?>

                </div> 
                
                <div class="main_stata">
                    <div class="row_di">
                        <div class="col_4_di">
                            <div class="main_stata_num"><?php echo number_format($counts['courses'], 0, ' ', ' '); ?></div>
                            <div class="main_stata_text"><?php echo ut_num_decline( $counts['courses'], [ 'Курс', 'Курса', 'Курсов' ], false ); ?></div>
                        </div>
                        <div class="col_4_di">
                            <div class="main_stata_num"><?php echo number_format($count_teachers, 0, ' ', ' '); ?></div>
                            <div class="main_stata_text"><?php echo ut_num_decline( $count_teachers, [ 'Преподаватель', 'Преподавателя', 'Преподавателей' ], false ); ?></div>
                        </div>
                        <div class="col_4_di">
                            <div class="main_stata_num"><?php echo number_format($counts['schools'], 0, ' ', ' '); ?></div>
                            <div class="main_stata_text"><?php echo ut_num_decline( $counts['schools'], [ 'Платформа', 'Платформы', 'Платформ' ], false ); ?></div>
                        </div>
                        <div class="col_4_di">
                            <div class="main_stata_num"><?php echo number_format($counts['reviews'], 0, ' ', ' '); ?></div>
                            <div class="main_stata_text"><?php echo ut_num_decline( $counts['reviews'], [ 'Отзыв', 'Отзыва', 'Отзывов' ], false ); ?></div>
                        </div>
                    </div>
                </div>

                <div class="main_search">  
                    <form method="get" id="main_searchform" action="#">
                        <input  class="main_search_input" 
                                type="search" 
                                value="<?php echo get_search_query(); ?>"  
                                name="s" 
                                id="s"
                                placeholder="Найти курс" 
                                required>
                        <input type="submit" id="searchsubmit" class="main_submit" value="Найти">
                    </form>
                </div>
                
                <?php if ($terms) : ?>
                    <div class="main_tag">  
                        <?php 
                        foreach ($terms as $term) : 
                            $link = get_term_link( (int)$term->term_id, $term->taxonomy );
                        ?>
                            <a href="<?php echo esc_url($link); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        <?php endforeach; ?> 
                    </div> 
                <?php endif; ?>

            </div> 
        </div>
    </div> 

<?php endif; ?>